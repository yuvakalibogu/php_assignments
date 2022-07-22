<?php
session_start();
array_splice($_SESSION['todoCollection'],$_REQUEST['index'], 1);
header("Location: {$_SERVER['HTTP_REFERER']}");

?>