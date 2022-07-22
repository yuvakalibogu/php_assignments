<?php
include "connection.php";

$id=$_REQUEST['id'];
$sql = "DELETE FROM todoitem WHERE id=$id";
$conn->query($sql);
header("Location: {$_SERVER['HTTP_REFERER']}")
?>