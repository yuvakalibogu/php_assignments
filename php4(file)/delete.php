<?php 

$fileFromSystem = file_get_contents('file.txt');

$todoCollection = unserialize($fileFromSystem);

array_splice($todoCollection,$_REQUEST['index'], 1);

$fil = serialize($todoCollection);

file_put_contents('file.txt',$fil);

header("Location: {$_SERVER['HTTP_REFERER']}");
?>