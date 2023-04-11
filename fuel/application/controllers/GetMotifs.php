<?php
class GetMotifs extends CI_Controller {
  public function _construct()
  {
      parent::_construct();   
      $CI =& get_instance();
      $CI->load->library('form_validation');
             
  }
    
  public function index()
  { 
      
    $dropDb = $this->input->post('dropDb');
    $file = $this->input->post('file');

    $motif = $this->input->post('motif');

    $dbhandle = mysqli_connect("localhost","rlswor5_richard",'Fu3lcm$pass');
    if($dropDb == 'yes')
      {
        //$dbhandle = mysqli_connect("localhost","rlswor5_richard",'Syp3rtjr2#@!');  //connect to mysqli
        $sql = 'DROP DATABASE rlswor5_proteins';
        mysqli_query($dbhandle,$sql);
        if (!mysqli_error($dbhandle)) 
          {
            echo "Database rlswor5_proteins was successfully dropped";
            echo "<br>";
          } 
        else if(mysqli_error($dbhandle)) 
          {
            echo 'Error dropping database: ' . mysqli_error($dbhandle);
            echo "<br>";              
          }
      }

    if($file && !$motif)
      {
        if($file != 'none') 
          {

            $path = dirname(__FILE__). '/'.$file;
            //echo $path;
            $fileString = file_get_contents($path);
            //echo $fileString;
            $this->buildProteinDb($fileString);   // call function to Build Protein Database
          }
      }

    if($motif)
      {

        $mo = array();
        $mo = str_split($motif,1);
        $moPatt = $mo[0].'XX'.$mo[1];
        $question_num = $mo[2]; // question number 
        //mysqli_close($dbhandle);
        $header = array();
      
        $rows = array();
        
        //echo "gets amino #1: ".$mo[0]."<br/>";
        //echo "gets amino #2: ".$mo[1]."<br/>";
        //echo "gets question: ".$mo[2]."<br/>";
        //echo "motif pattern: ".$moPatt."<br/>";
      
        
        if(mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: ".mysqli_connect_error(). "\n";
            echo "<br>";              
          }
        else
          {
    
            mysqli_select_db($dbhandle,'rlswor5_proteins');
        
            $qstr = array();
            $qstr[] = 'SELECT DISTINCT accessionNumber, motifPattern FROM miniMotif WHERE motifPattern = "'.$moPatt.'" ORDER BY accessionNumber';
            $qstr[] = 'SELECT actualMotif, motifPattern, accessionNumber,motifLength FROM miniMotif WHERE motifPattern = "'.$moPatt.'" ORDER BY accessionNumber, motifLength';
            $qstr[] = 'SELECT DISTINCT startPosition, motifPattern, accessionNumber FROM miniMotif WHERE motifPattern = "'.$moPatt.'" ORDER BY accessionNumber, startPosition';
            $qstr[] = 'SELECT DISTINCT accessionNumber, COUNT(accessionNumber) as motifCount FROM miniMotif  WHERE motifPattern = "'.$moPatt.'" GROUP BY accessionNumber';
            $qstr[] = 'SELECT DISTINCT speciesName, motifPattern FROM miniMotif WHERE motifPattern = "'.$moPatt.'" ORDER BY speciesName';
            $qstr[] = 'SELECT AVG(proteinLength), motifPattern FROM miniMotif WHERE motifPattern = "'.$moPatt.'"';
            //echo "check query: ".$qstr[5];
            $columns = array(
              array('accessionNumber','motifPattern'),
              array('actualMotif','motifPattern','accessionNumber','motifLength'),
              array('startPosition','motifPattern','accessionNumber'),
              array('accessionNumber','motifCount'),
              array('speciesName','motifPattern'),
              array('AVG(DISTINCT p.proteinLength)','motifPattern')
            );
      
            $headers = array(array('Accession Number','Motif Pattern'),
              array('Actual Motif','Motif Pattern','Accession Number','Motif Length'),
              array('Start Position','Motif Pattern','Accession Number'),
              array('Accession Number','Motif Count with Pattern '.$moPatt),
              array('Species Name','Motif Pattern'),
              array('AVG Protein Length','Motif Patterns')
            );
      
      
            $sql= $qstr[$question_num];
            //echo $sql;
            $result = mysqli_query($dbhandle,$sql);
            if (mysqli_error($dbhandle)) 
              die("Error selecting Motif: ". mysqli_error($dbhandle));
            else if(!mysqli_error($dbhandle))
              {
                $headers = $headers[$question_num];
                $columns = $columns[$question_num];
                $count  = 0;
                while($newArray = mysqli_fetch_array($result))
                {                   
                  $rows[$count] = array(); 
                  for($i=0;$i < count($headers);$i++) 
                    {
                      if($columns[$i] == 'motifPattern')
                        {
                            $newArray[$i] = str_replace('XX','---',$newArray[$i]);
                        }
                      if($columns[$i] == 'motifCount')
                        {
                            $headers[$i] = str_replace('XX','---',$headers[$i]);
                        }
                      $rows[$count][$i] = $newArray[$i];  
                    }       
                    $count++;   
                }
                  //print_r($rows);
                  $return_arr =  ["header" => $headers, "rows" => $rows];
                  //print_r(json_encode($return_arr));
                  header('Content-Type: application/json; charset=utf-8');
                  echo json_encode($return_arr);                
              } 
          }
          return;
        
      }
    
  //mysqli_close($dbhandle);
} // end function index   




public function assocArray($m,&$resarr, $c/*for comments*/,$ss/*strip spaces*/,$prev)  // Recursive
  {
    global $turns;
    $index=0;
    foreach ($m as $key=>$value)
      {
        if(!is_array($value))
          {
            if($c) 
              {
                echo $key.'=>'.$value.'<br />';
              }
                
            $resarr[$turns-$prev][$key]=$value;

            if($ss&&$key==0) 
              {
                $value = str_replace(" ", "", $value);
              }                
          
            if($index==1) 
              {
                $index=0;
              }                
            else 
              {
                $index++;
              }  
          }
        else
          {
            if(is_array($value))
              {
                if($c) 
                  {
                    echo "Value #: ".$turns.'<br />';
                  } 
                  $this->assocArray($value,$resarr,$c,false,$prev);
                  $turns++;
              }
            else 
              {
                break;
              }   
          }
      }        
    return $turns;
  }


public function findMotifs($dbhandle,$seq,$first,$last,$patt,$acc,$sName,$sLength)
  {

    $soSeq = strlen((string)$seq);
    $seqStr = array();
    $seqStr = str_split($seq);

    for($i=0;$i<$soSeq;$i++)
      {
        if($seqStr[$i]==$first)
          {
            for($j=$i+1;$j<$soSeq;$j++)
              {
                if($seqStr[$j]==$last)
                  {
                    $sl=($j-$i+1);
                    $ss= substr($seq,$i,$sl);
                    $st= ($i+1);
                    $end=($j+1);
                
                    $sql = "INSERT INTO miniMotif (motifPattern,actualMotif,accessionNumber,speciesName,proteinLength,motifLength,startPosition,endPosition) values('$patt','$ss','$acc','$sName','$sLength','$sl','$st','$end')";
                    //execute SQL
                    //$result = executeSQL($sql,$conn,$mess);
                    mysqli_query($dbhandle,$sql);
                    
                    $i = $j;
                    $j = $j + $soSeq;
                  }
              }              
          }
      }
  }


public function proteinDatabaseCreate($sql,$dbhandle)
{
 
  mysqli_query($dbhandle,$sql);
  if (mysqli_error($dbhandle)) 
    {
      echo "Error message: ". mysqli_error($dbhandle);
      echo "<br>";
      //exit();
      return false;
    }
  else if(!mysqli_error($dbhandle))
    {
      echo "Database being created";
      echo "<br>";
      //exit();
      return true;
    }   
}

public function executeSQL($sql,$conn,&$message)
{
  //execute SQL
  set_time_limit(300);
  $querySucceeded = "Query succeeded";

  if($result = $conn->query($sql))
    {
      $message = $querySucceeded;
      return $result;
    }
  else 
    {
      $message= "<br/>Query error: ". mysqli_error($conn);
      return NULL;
    }
}


public function buildProteinDb($filestr)  // function for building Protein Database
{
  $fileString=$filestr;
  $conn = 0;
  $gi_number= array(array());
  $accession_num= array(array());
  $spcName= array(array());
  $locus= array(array());
  $seqnc= array(array());
  $miniM= array();
  $seqLength=array();
  $arrOfPatts=array();
  $num_Names = 0;
  $num_Locus = 0;
  $num_Species = 0;
  $num_Acc_Nums = 0;
  $num_Seqs = 0;


  $pattern = '/gi\|[0-9]+\|ref/';


  preg_match_all($pattern, $fileString, $matches, PREG_OFFSET_CAPTURE);

  $trns = $this->assocArray($matches,$gi_number,0,0,0);
  $num_Species = $trns;
  //echo "Number of Species: ".$num_Species.'<br/>';

  $pattern = '/ref\|[A-Za-z0-9(\.)(_)]+\|/';
  preg_match_all($pattern, $fileString, $matches2, PREG_OFFSET_CAPTURE);
  $trns2=$this->assocArray($matches2,$accession_num,0,0,$trns);
  $num_Acc_Nums = $trns2-$trns;
  //echo "Number of Accessions: ".$num_Acc_Nums.'<br/>';


  $pattern = '/\|\s+[A-Za-z]+[\w|\d|\s|\-|:|;|\(|\)|\,|\/|]+\[/';
  preg_match_all($pattern, $fileString, $matches3, PREG_OFFSET_CAPTURE);
  $trns3=$this->assocArray($matches3,$locus,0,0,$trns2);
  $num_Locus = $trns3-$trns2;
  //echo "Number of Names: ".$num_Locus.'<br/>';

  $pattern = '/[A-Z][A-Z]{50}[\w|\s]+[A-Z]/';
  preg_match_all($pattern, $fileString, $matches4, PREG_OFFSET_CAPTURE);
  $trns4=$this->assocArray($matches4,$seqnc,0,0,$trns3);
  $num_Seqs = $trns4-$trns3;
  //echo "Number of Sequences: ".$num_Seqs.'<br/>';


  $pattern = '/\[[\w|\s|\(|\)|\-|\.]*\]/';
  preg_match_all($pattern, $fileString, $matches5, PREG_OFFSET_CAPTURE);
  $trns5=$this->assocArray($matches5,$spcName,0,0,$trns4);
  $num_Names=$trns5-$trns4;
  //echo "Number of Species Names: ".$num_Names.'<br/>';


  //Create Proteins Database

  $dbhandle = mysqli_connect("database","rlswor5_richard",'Syp3rtjr2#@!');

  if(mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: ".mysqli_connect_error(). "\n";
      echo "<br>";      
    }
  else
    {
      echo "Connection to MySQL Made\n";
      echo "<br>";
      echo "Now Checking Database!\n";
      echo "<br>";

      $create_db = true;
      $dbName = "rlswor5_proteins";
      //mysqli_select_db($dbhandle,$dbName)
     
      $createDb = "CREATE DATABASE ";
      $sql= $createDb.$dbName;
      //exit();
      //$create_db = $this->proteinDatabaseCreate($sql,$dbhandle);
     
      mysqli_query($dbhandle,$sql);
      if (mysqli_error($dbhandle)) 
        {
            echo "Error creating database: " . mysqli_error($dbhandle);
            echo "<br>";
            //exit();
            return false;
        }
      else if(!mysqli_error($dbhandle))
        {         
            echo "Database created successfully";
        }
   
      mysqli_select_db($dbhandle,$dbName);
      $sql = "CREATE TABLE protein (id int not null primary key auto_increment, locus varchar(150),speciesNumber varchar(75),speciesName varchar(75), accessionNumber varchar(75), proteinSequence varchar(2000), proteinLength int)";
      mysqli_query($dbhandle,$sql);
      if (mysqli_error($dbhandle)) 
        {
         
          echo "Error message: ". mysqli_error($dbhandle);
          echo "<br>";
          //exit();
          return false;
        }
      else if(!mysqli_error($dbhandle))
        {
          if(mysqli_warning_count($dbhandle) == 0){
            for($i=0;$i<$num_Seqs-1;$i++)  // clean up strings and fill protein database
            {
              $locus[$i][0]= substr($locus[$i][0],1,strlen($locus[$i][0])-2);  // locus strings
              $lc = $locus[$i][0];
              //echo '<br/>'.$lc;
    
              $gi_number[$i][0]= substr($gi_number[$i][0],3,strlen($gi_number[$i][0])-7);  //  gi-number or species-number
              $gi = $gi_number[$i][0];
              //echo '<br/>'.$gi;
    
              $accession_num[$i][0]= substr($accession_num[$i][0],4,strlen($accession_num[$i][0])-5);  //  accession numbers
              $acc = $accession_num[$i][0];
              //echo '<br/>'.$acc;
    
              $seqnc[$i][0]= substr($seqnc[$i][0],4,strlen($seqnc[$i][0]));  //  sequences
              $sq =  $seqnc[$i][0];
              //echo '<br/>'.$sq;
    
              $spcNm = $spcName[$i][0];      // species Names
    
              $seqLength[$i] = strlen($sq);
              //echo '<br/> Length of String:  '.$locus_length[$i];
              $id = $i+1; 
              $sql = "INSERT INTO protein values('$id', '$lc', '$gi','$spcNm', '$acc', '$sq','$seqLength[$i]' )";   
              $result = mysqli_query($dbhandle,$sql);                              
            }  
          }
         
        }   
      
   
      
      $this->buildMinimotifDatabase($dbhandle);
      //mysqli_close($dbhandle); 
    }

  }     // End of buildProteinDb function

public function buildMinimotifDatabase($dbhandle)
{
       
  $num_rows=0;
	$amino_code = array();
	$amino_code[]= 'G';
	$amino_code[]='P';
	$amino_code[]='A';
	$amino_code[]='V';
	$amino_code[]='L';
	$amino_code[]='I';
	$amino_code[]='M';
	$amino_code[]='C';
	$amino_code[]='P';
	$amino_code[]='Y';
	$amino_code[]='W';
	$amino_code[]='H';
	$amino_code[]='K';
	$amino_code[]='R';
	$amino_code[]='Q';
	$amino_code[]='N';
	$amino_code[]='E';
	$amino_code[]='D';
	$amino_code[]='S';
	$amino_code[]='T';

// Create mini-Motif database
   
   
   $sql = "CREATE TABLE miniMotif (id int not null primary key auto_increment,motifPattern varchar(75),actualMotif varchar(1500),accessionNumber varchar(75),speciesName varchar(75), proteinLength int, motifLength int, startPosition int, endPosition int )";
   
    // execute SQL
    mysqli_query($dbhandle, $sql);
    if (mysqli_error($dbhandle)) 
    {
        echo "Error building MiniMotifs tables.." . mysqli_error($dbhandle);
        echo "<br>";
        //exit();
        return false;
    }
    else if(!mysqli_error($dbhandle))
      {         
        // Building MiniMotifs             
        $sql = "SELECT * FROM protein";
        $result = mysqli_query($dbhandle,$sql);  // check for already existing miniMotif table
        while($newArray = mysqli_fetch_array($result, MYSQLI_ASSOC)) // One Protein per Loop
          {
            
            $seq = $newArray["proteinSequence"];
            $acc = $newArray["accessionNumber"];
            $spName = $newArray["speciesName"];
            //$sqName = $newArray["seqName"];
            $sqLength = $newArray["proteinLength"];

            //echo "The seq is: ".$seq;
            $so = sizeof($amino_code);
            for($k=0;$k<$so;$k++)
              {
                for($j=0;$j<$so;$j++)
                  {
                  $pattrn = $amino_code[$k]."XX".$amino_code[$j];
                  //echo "miniMotif Pattern: ".$pattrn."<br/>";              
                  $this->findMotifs($dbhandle,$seq,$amino_code[$k],$amino_code[$j],$pattrn,$acc,$spName,$sqLength);            
                  }
              }  // end for
          
          } //End While       
        echo "Please Wait... MiniMotifs Table Are Done Building..."; 
        return true;
      }
  
     
  
}  // end of buildMinimotifDatabase


  public function query3($dbhandle,&$cntarr,$mopat)
    {
        // Begin calculation of count of motifs for all accession numbers, subst. for query 3 below query 0 is the first
        $sql = 'SELECT DISTINCT accessionNumber FROM miniMotif WHERE motifPattern = "'.$mopat.'" ORDER BY accessionNumber'; 
        $sarr = array();  
        //$cntarr = array();
        //echo $mopat;
        
        while($newArray = mysqli_fetch_array($result))
            { 
            print_r($newArray); 
            $sarr[]=$newArray['accessionNumber'];
        
            }
            //echo "acc nos: ".sizeof($sarr);   
            //print_r($sarr);

    
        for($w=0;$w<sizeof($sarr);$w++)
          {
              //echo $sarr[$w];
              $sql = 'SELECT Count(actualMotif), actualMotif, accessionNumber, motifPattern FROM miniMotif WHERE motifPattern = "'.$mopat.'" AND accessionNumber = "'.$sarr[$w];
              echo $sql;
              if(!$result = mysqli_query($dbhandle,$sql))
                die("Error getting count of Motifs: ".mysqli_error($dbhandle));
              else
                  {              
                    while($newArray = mysqli_fetch_array($result))
                      {                       
                        //print_r($newArray);
                        $cntarr[] = $newArray[0];
                      }             
                  } 
          }
    }
  
  

}