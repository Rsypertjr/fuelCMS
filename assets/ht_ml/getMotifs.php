<?php
function assocArray($m,&$resarr, $c/*for comments*/,$ss/*strip spaces*/,$prev)  // Recursive
{
        global $turns;
        $index=0;
       	foreach ($m as $key=>$value)
          {
            if(!is_array($value))
              {
              if($c) echo $key.'=>'.$value.'<br />';
                $resarr[$turns-$prev][$key]=$value;

              if($ss&&$key==0) 
                $value = str_replace(" ", "", $value);
              
              if($index==1) 
                $index=0;
              else
                $index++;
                  
              }
            else
              {
                if(is_array($value))
                  {
                if($c) echo "Value #: ".$turns.'<br />';
                  assocArray($value,$resarr,$c,false,$prev);
                  $turns++;
                  }
                else 
                  break;
                    
              }
        }        
        return $turns;
}


function findMotifs($dbhandle,$seq,$first,$last,$patt,$acc,$sName,$sLength)
{

$soSeq = strlen((string)$seq);
$seqStr = array();
$seqStr = str_split($seq);


//echo $conn."<br/>".$seq."<br/>".$l1."<br/>".$l2."<br/>".$patt."<br/>".$acc."<br/>".$sName."<br/>".$sLength;
for($i=0;$i<$soSeq;$i++)
   {
    if($seqStr[$i]==$first)
       {
       for($j=$i+1;$j<$soSeq;$j++)
           if($seqStr[$j]==$last)
               {
                $sl=($j-$i+1);
                $ss= substr($seq,$i,$sl);
                $st= ($i+1);
                $end=($j+1);
                //echo "Start Position: ".$st."  End Position: ".$end."<br/>";
                //$retPos[]=$i;
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


function proteinDatabaseCreate($sql,$dbhandle)
{
  
  //echo($sql."\n");
   
  mysqli_query($dbhandle,$sql);
  if (mysqli_error()) {
    echo "Error message: ". mysqli_error();
    echo "<br>";
    //exit();
    return false;
  }
 else if(!mysqli_error())
  {
    echo "Database being created";
    echo "<br>";
    //exit();
    return true;
  }
  
 
}

function executeSQL($sql,$conn,&$message)
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
   $message= "<br/>Query error: ". mysqli_error();
   return NULL;
   }
}

function buildProteinDb($filestr)  // function for building Protein Database
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


echo "Unless you see any errors, the tables are ready!";
echo "<br>";
preg_match_all($pattern, $fileString, $matches, PREG_OFFSET_CAPTURE);

$trns = assocArray($matches,$gi_number,0,0,0);
$num_Species = $trns;
//echo "Number of Species: ".$num_Species.'<br/>';

$pattern = '/ref\|[A-Za-z0-9(\.)(_)]+\|/';
preg_match_all($pattern, $fileString, $matches2, PREG_OFFSET_CAPTURE);
$trns2=assocArray($matches2,$accession_num,0,0,$trns);
$num_Acc_Nums = $trns2-$trns;
//echo "Number of Accessions: ".$num_Acc_Nums.'<br/>';


$pattern = '/\|\s+[A-Za-z]+[\w|\d|\s|\-|:|;|\(|\)|\,|\/|]+\[/';
preg_match_all($pattern, $fileString, $matches3, PREG_OFFSET_CAPTURE);
$trns3=assocArray($matches3,$locus,0,0,$trns2);
$num_Locus = $trns3-$trns2;
//echo "Number of Names: ".$num_Locus.'<br/>';

$pattern = '/[A-Z][A-Z]{50}[\w|\s]+[A-Z]/';
preg_match_all($pattern, $fileString, $matches4, PREG_OFFSET_CAPTURE);
$trns4=assocArray($matches4,$seqnc,0,0,$trns3);
$num_Seqs = $trns4-$trns3;
//echo "Number of Sequences: ".$num_Seqs.'<br/>';


$pattern = '/\[[\w|\s|\(|\)|\-|\.]*\]/';
preg_match_all($pattern, $fileString, $matches5, PREG_OFFSET_CAPTURE);
$trns5=assocArray($matches5,$spcName,0,0,$trns4);
$num_Names=$trns5-$trns4;
//echo "Number of Species Names: ".$num_Names.'<br/>';


//Create Proteins Database

$dbhandle = mysqli_connect("localhost","rlswor5_richard",'Fu3lcm$pass');

if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: ".mysqli_connect_error(). "\n";
  echo "<br>";
  
}
else{
    echo "Connection to MySQL Made\n";
    echo "<br>";
    echo "Now Checking Database!\n";
    echo "<br>";

    $create_db = true;
    $dbName = "rlswor5_proteins";
    if(!mysqli_select_db($dbhandle,$dbName)){
      echo "Database needs to be Created!";
      echo "<br>";
      $createDb = "CREATE DATABASE ";
      $sql= $createDb.$dbName;
      //exit();
      $create_db = proteinDatabaseCreate($sql,$dbhandle);
      mysqli_select_db($dbhandle,"rlswor5_proteins");
    }
    else{
      echo "Proteins Database already Exists!";
      echo "<br>";
      $create_db = false;
      return true;
    }
  }

  if($create_db){

      $sql = "CREATE TABLE protein (id int not null primary key auto_increment, locus varchar(75),speciesNumber varchar(75),speciesName varchar(75), accessionNumber varchar(75), proteinSequence varchar(2000), proteinLength int)";
      mysqli_query($dbhandle,$sql);
      
      for($i=0;$i<$num_Seqs;$i++)  // clean up strings and fill protein database
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
            
          $sql = "INSERT INTO protein values('$i', '$lc', '$gi','$spcNm', '$acc', '$sq','$seqLength[$i]' )";   
          $result = mysqli_query($dbhandle,$sql);                              
        } 
      buildMinimotifDatabase($dbhandle);
    }
    mysqli_close($dbhandle); 

}     // End of buildProteinDb function

function buildMinimotifDatabase($dbhandle)
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
  
       // Building MiniMotifs             
       $sql = "SELECT * FROM protein";
       $result = mysqli_query($dbhandle,$sql);  // check for already existing miniMotif table
     
	     while($newArray = mysqli_fetch_array($result, MYSQLI_ASSOC)) // One Protein per Loop
		      {
            
            $seq = $newArray[proteinSequence];
            $acc = $newArray[accessionNumber];
            $spName = $newArray[speciesName];
            $sqName = $newArray[seqName];
            $sqLength = $newArray[proteinLength];

            //echo "The seq is: ".$seq;
            $so = sizeof($amino_code);
            for($k=0;$k<$so;$k++)
              {
                for($j=0;$j<$so;$j++)
                  {
                  $pattrn = $amino_code[$k]."XX".$amino_code[$j];
                  //echo "miniMotif Pattern: ".$pattrn."<br/>";              
                  findMotifs($dbhandle,$seq,$amino_code[$k],$amino_code[$j],$pattrn,$acc,$spName,$sqLength);            
                  }
              }  // end for
          
          }//End While       
  
}  // end of buildMinimotifDatabase


function query3($dbhandle,&$cntarr,$mopat)
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
     die("Error getting count of Motifs: ".mysqli_error());
   else
     {              
     while($newArray = mysqli_fetch_array($result))
       {                       
         //print_r($newArray);
         $cntarr[] = $newArray[0];
       }             
     } 
   }
    //print_r($cntarr);  //End of motif count for all accession numbers 
}



// END OF FUNCTION SECTION




// API SECTION *********************************************************

if(isset($_GET["dropDb"]))
  {
	if($_GET["dropDb"] == "yes")
		{
		    
		    $dbhandle = mysqli_connect("localhost","rlswor5_richard",'Fu3lcm$pass');  //connect to mysqli
        $sql = 'DROP DATABASE rlswor5_proteins';
        mysqli_query($dbhandle,$sql);
        if (!mysqli_error()) {
          echo "Database rlswor5_proteins was successfully dropped";
          echo "<br>";
        } 
        else if(mysqli_error()) {
          echo 'Error dropping database: ' . mysqli_error();
          echo "<br>";
          
        }
		}
  }

if(isset($_GET["file"]) && !isset($_GET["motif"]))
  {
	if($_GET["file"] != 'none')
	  {
        $file = $_GET["file"];
        //$file = "FASTA-TEST.txt";
        $path = dirname(__FILE__). '/'.$file;
        //echo $path;
        $fileString = file_get_contents($path);
        //echo $fileString;
        buildProteinDb($fileString);   // call function to Build Protein Database
      }  
        
 
  }
if(isset($_GET["motif"]))
  {
  
  $mo = array();
  $mo = str_split($_GET["motif"],1);
  $moPatt = $mo[0].'XX'.$mo[1];
  $question_num = $mo[2]; // question number 
 
  $header = array();

  $rows = array();

  //echo "gets amino #1: ".$mo[0]."<br/>";
  //echo "gets amino #2: ".$mo[1]."<br/>";
  //echo "gets question: ".$mo[2]."<br/>";
  //echo "motif pattern: ".$moPatt."<br/>";

  $dbhandle = mysqli_connect("localhost","rlswor5_richard",'Fu3lcm$pass');  //connect to mysqli
  if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ".mysqli_connect_error(). "\n";
    echo "<br>";
    
  }
      else{
      mysqli_select_db($dbhandle,'rlswor5_proteins');

      $qstr = array();
      $qstr[] = 'SELECT DISTINCT accessionNumber, motifPattern FROM miniMotif WHERE motifPattern = "'.$moPatt.'" ORDER BY accessionNumber';
      $qstr[] = 'SELECT actualMotif, motifPattern, accessionNumber,motifLength FROM miniMotif WHERE motifPattern = "'.$moPatt.'" ORDER BY accessionNumber, motifLength';
      $qstr[] = 'SELECT DISTINCT startPosition, motifPattern, accessionNumber FROM miniMotif WHERE motifPattern = "'.$moPatt.'" ORDER BY accessionNumber, startPosition';
      $qstr[] = 'SELECT DISTINCT accessionNumber, COUNT(accessionNumber) as motifCount FROM miniMotif  WHERE motifPattern = "'.$moPatt.'" GROUP BY accessionNumber';
      $qstr[] = 'SELECT DISTINCT speciesName, motifPattern FROM miniMotif WHERE motifPattern = "'.$moPatt.'" ORDER BY speciesName';
      $qstr[] = 'SELECT AVG(motifLength), motifPattern FROM miniMotif WHERE motifPattern = "'.$moPatt.'"';
      //echo "check query: ".$qstr[5];
      $columns = array(
                  array('accessionNumber','motifPattern'),
                  array('actualMotif','motifPattern','accessionNumber','motifLength'),
                  array('startPosition','motifPattern','accessionNumber'),
                  array('accessionNumber','motifCount'),
                  array('speciesName','motifPattern'),
                  array('AVG(motifLength)','motifPattern')
                );

      $headers = array(array('Accession Number','Motif Pattern'),
                  array('Actual Motif','Motif Pattern','Accession Number','Motif Length'),
                  array('Start Position','Motif Pattern','Accession Number'),
                  array('Accession Number','Motif Count with Pattern '.$moPatt),
                  array('Species Name','Motif Pattern'),
                  array('AVG Protein Length','Motif Patterns'));


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
                for($i=0;$i < count($headers);$i++) {
                  if($columns[$i] == 'motifPattern'){
                    $newArray[$i] = str_replace('XX','---',$newArray[$i]);
                  }
                  if($columns[$i] == 'motifCount'){
                    $headers[$i] = str_replace('XX','---',$headers[$i]);
                  }
                  $rows[$count][$i] = $newArray[$i];

                }               
                $count++;   
              }
              //print_r($rows);
              $return_arr[] = array("header" => $headers, "rows" => $rows);
              echo json_encode($return_arr);
              
            } 


      }
      mysqli_close($dbhandle);
  }


?>