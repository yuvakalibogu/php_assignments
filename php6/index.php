<?php
include "./connection.php";
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
    <form action="submit.php" method="post">
        <input type="text" name="text" id="text">
        <input type="button" value="submit">
           </form>
           <?php
        $result = $conn->query("SELECT * from todoitem") or die($mysqli->error);
        
    ?>
          <?php
           while($row = $result->fetch_assoc()) {?>
           <li><?php echo $row['caption']; ?>
           <input type="button" value="DELETE" onclick="location.href='remove.php?id=<?php echo $row['id']; ?>';"></li>
           </li><?php }?>
           
      
 
    

</body>
</html>