<?php 
$fileFromSystem = file_get_contents('file.txt');

$todoCollection = unserialize($fileFromSystem);
if(!$todoCollection){
    $todoCollection=[];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="post">
        <input type="text" name="item" id="item">
    </form>
    <ul>
    <?php for($i=0; $i<sizeof($todoCollection); $i++) {?>
    <li>
    <?php echo $todoCollection[$i]['caption'];?>
    <input type="button" value="DELETE" onclick="location.href='delete.php?index=<?php echo $i; ?>';"></li>
<?php } ?>

</ul>
</body>
</html>