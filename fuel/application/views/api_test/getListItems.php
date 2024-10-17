<?php
    require_once('lib/api.php');

    if(isset($_GET["getList"])) {        
    
                $start = 0;
                $slicecount = 10;

                $url = $api::baseURL . "/index.php/SearchInterfaces/141";
                $request_fields = array(
                    'SI357' => "*",
                    'Thumbnails[]' => array('Large'),
                    'Start' => $start,
                    'Count' => $slicecount,
                    'SearchType' => 'and'
                );
                $result = $api->request($url, $request_fields);
                
                // uncomment to print the entire json response
                header('Content-Type: application/json');
                echo json_encode($result);
                die();
    }


