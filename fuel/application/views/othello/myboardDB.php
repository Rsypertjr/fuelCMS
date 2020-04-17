<?php

  
  function selectTable($table){
  	    $servername = "localhost";
		$username = "rlswor5_richard";
		$password = "syp3rt";
		$dbname = "rlswor5_fuel_cms";
		$file="";
        
        $conn = mysqli_connect($servername,$username,$password, $dbname);
       // Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		} 
		
		$sql = 'SELECT '.$table.' from boards WHERE rowNum=1';
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $file = $row[$table];
		        $file = base64_decode($file);
		    }
		} else {
		    echo "0 results";
		}
        $conn->close(); 
           
        //console_log($file);
        return $file;
  	
  }
  
    
 function console_log( $data ) {
	  $output  = "<script>console.log( 'PHP debugger: ";
	  $output .= json_encode(print_r($data, true));
	  $output .= "' );</script>";
	  echo $output;
}



echo selectTable('myBoard');





?>