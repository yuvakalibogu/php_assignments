<?php
session_start();
array_push($_SESSION["todoCollection"], ["caption" => $_POST["item"], "isCompleted" => false]);

header("Location:{$_SERVER['HTTP_REFERER']}");
?>