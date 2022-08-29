<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "hello"; ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Username: <input type="text" name="username">
        <input type="submit" value="submit">
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"]  == "POST"){
           $name = $_REQUEST['username'];       //$name = $_POST['username'];
            if(empty($name)){
                echo "<span style='color:red'>Username is not empty !!</span>";
            }else{
                echo "<span style='color:green'>You have submited: ". $name. "</span>";
            }
        }
    ?>

    <form action="practis.php" method="POST"> <br>
        First Num : <input type="number" name="fname"> <br> <br>
        Second Num : <input type="number" name="lname">

        <input type="submit" name="add" value=" + ">
        <input type="submit" name="biog" value=" - ">
        <input type="submit" name="gun" value=" x ">
        <input type="submit" name="vag" value=" / ">
        <input type="submit" name="clear" value=" C ">
    </form>

    
        <?php
            $a=$_POST['fname'];
            $b=$_POST['lname'];

            if(isset($_POST['add'])){
                echo $a + $b;
            }elseif(isset($_POST['biog'])){
                echo $a - $b; 
            }elseif(isset($_POST['gun'])){
                echo $a * $b; 
            }elseif(isset($_POST['vag'])){
                echo $a / $b; 
            }elseif(isset($_POST['clear'])){
                echo 0; 
            }
        ?>
   
 

</body>
</html>