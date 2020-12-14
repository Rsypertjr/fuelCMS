<?php
require_once('lib/api.php');

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
echo json_encode($result, JSON_PRETTY_PRINT);
die();

//print the first item
$first_item = $result->results[1];

$description = '';
$date = '';
$image = '';

foreach($first_item->attribute_values as $av) {
	if(empty($av->value)) continue;
	$avname = $av->attribute_name;
	$val = $av->value;
	switch ($avname) {
		case 'Description':
			$description = $val->text;
			break;
		case 'Creation Date':
			$date = $val->date;
			break;
	}
}
   
if(!empty($first_item->digital_assets[0]->large_thumbnail)) {
	$image = $first_item->digital_assets[0]->large_thumbnail;
}


echo "ID: " . $first_item->id . "<br />";
echo "Title: " . $first_item->name . "<br />";
echo "Description: " . $description . "<br />";
echo "Date: " . $date . "<br />";
echo "<img src=\"" . $image . "\" />";
