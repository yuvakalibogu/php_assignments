<!DOCTYPE html>
<html lang="en">
<body>
<form method="get" action="<?php echo $_SERVER["$PHP_SELF"];?>">
    enter
    <input type="text" name="name" id="name">
</form>
<?php
    if(isset($_GET["name"])){
        for ($i=1; $i<=10; $i++){
            $o=$_GET["name"];
            $oo=$o*$i;
            
       echo  "$o x $i = $oo <br>";
       
        }
    }
    
    ?>
</body>
</html>

