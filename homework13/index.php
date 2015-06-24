<?php
require_once 'all.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
       <style>
        form{
            width: 300px;
            height: 150px;
            background-color: greenyellow;
            margin: 15px;
            padding: 5px;
        }
        div p{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST["submit"]) && $_POST["submit"]==1){
        $name=$_POST["name"];
        $pass=$_POST["password"];
        $connection = mysqli_connect('localhost' , $name , $pass,'accessories_shop');
        if (!$connection) {
	die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
        } 
        else {
            //echo"<a href='registration.php'>";
        }
        }
    ?>
    <div>
        <p>Registration new user's:</p>
        <a href="registration.php">
        <input type="submit" value="registration">
        </a>
    </div>
    <br/>
    <br/>
    <form action="list_of_products.php" method="POST">
        <div>
            <span>User name :</span>
            <input type="text" name="username">
        </div>
        <div>
            <span>Password</span>
            <input type="password" name="pass">
        </div>
        <div>
            <input type="submit" value="enter">
            <input type="hidden" name="submit" value="1">
        </div>
    </form>
</body>
</html>