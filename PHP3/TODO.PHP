<?php
session_start();
if(!isset($_SESSION['todoCollection'])) {
    $_SESSION['todoCollection'] = [];
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
    <?php echo"TO"; ?>
    <form action="storeitem.php" method="post">
<input type="text" name="item" id="item" >
</form>

<ul>
<?php for($i = 0; $i < sizeof($_SESSION['todoCollection']); $i++) { ?>
<li><span><?php echo $_SESSION['todoCollection'][$i]['caption']; ?></span>
<input type="button" value="DELETE" onclick="location.href='delete.php?index=<?php echo $i; ?>';"></li>
<?php } ?>
</ul>
    
</body>
</html>