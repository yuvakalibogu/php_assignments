<?php
if(file_exists("file.txt")){
    $fileFromSystem = file_get_contents('file.txt');
    $todoCollection = unserialize($fileFromSystem);
    array_push($todoCollection , ['caption' => $_POST['item'] , 'isCompleted' => false]);
    $stringified = serialize($todoCollection);
    file_put_contents('file.txt',$stringified);
}else{
$todoCollection=[];
array_push($todoCollection,['caption' => $_POST['item'] , 'isCompleted' => false]);
$stringified=serialize($todoCollection);
file_put_contents('file.txt',$stringified);
}









header("Location: {$_SERVER['HTTP_REFERER']}");
?>