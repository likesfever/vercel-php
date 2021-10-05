<?php


ini_set('max_execution_time', 0);
$useragent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.96 Safari/537.36";

    $path = base64_decode($_GET['q']);
// echo $file_url;


$finfo = finfo_open(FILEINFO_MIME_TYPE);
header('Content-Type: '.finfo_file($finfo, $path));

$finfo = finfo_open(FILEINFO_MIME_ENCODING);
header('Content-Transfer-Encoding: '.finfo_file($finfo, $path)); 

header('Content-disposition: attachment; filename="'.basename($path).'"'); 
readfile($path); // do the double-download-dance (dirty but worky)



?>
