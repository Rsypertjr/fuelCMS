<?php
// Read the file contents into a string variable,
// and parse the string into a data structure
if(isset($_GET["state"])) {
      //if($_GET["state"] == "Michigan"){
            $url='https://static01.nyt.com/elections-assets/2020/data/api/2020-11-03/race-page/'.str_replace(' ','-',strtolower($_GET["state"]).trim()).'/president.json';
     // }
     // else if($_GET["state"] == "Pennsylvania"){
            //$str_data = file_get_contents("/home/rlsjr/Documents/Pennsylvania2020.txt");
       //     $url='https://static01.nyt.com/elections-assets/2020/data/api/2020-11-03/race-page/'.strtolower($_GET["state"]).'/president.json';
    //  }
      
      $ch=curl_init();
      $timeout=2;

      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

      // Get URL content
      $str_data =curl_exec($ch);
      // close handle to release resources
      curl_close($ch);
      //output, you can also save it locally on the server
      //$str_data = file_get_contents("/home/rlsjr/Documents/Michigan2020.txt");
      header('Content-Type: application/json');
      //echo json_encode($data);
      echo $str_data;
      die();
}