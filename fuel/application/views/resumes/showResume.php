<?php
$file ='pdf/Richard-Sypert-12-13-2021.pdf';
$filename = 'Richard L. Sypert Jr. Resume'; /* Note: Always use .pdf at the end. */

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);
?>