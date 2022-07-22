<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<?php
if(isset($_GET["input"])){
    echo "Hii " . $_GET["input"] ;
}
?>
<form method="get" action="submit.php">
    Name:
    <input type="text" name="input" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>

</body>



