<?php
require_once 'all.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>REGISTRATION</title>
       <style>
        form{
            width: 300px;
            height: 150px;
            background-color: greenyellow;
            margin: 15px;
            padding: 5px;
        }
    </style>
</head>
<body>
     <?php
    function isValid($username,$password,$repassword,$email){
        if(mb_strlen(addslashes($username))>3 && mb_strlen(addcslashes($email))>8 &&
                mb_strlen(addcslashes($password))>3 && $password==$repassword){
            return TRUE;
        }
        else{
            return FALSE;
        }
        }
            if(isset($_POST["submit"]) && $_POST["submit"]=="1"){
                $username=$_POST['username1'];
                $password=$_POST['password1'];
                $repassword=$_POST['repassword1'];
                $email=$_POST['email1'];
                $isValid = isValid($username, $password, $repassword,$email);
                if($isValid){
                    require_once 'index.php';
                    $userdata="CREATE USER '$username'@'localhost' IDENTIFIED BY '$password';
                    GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO '$username'@'localhost' IDENTIFIED BY
                    '$pssword' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 
                    MAX_USER_CONNECTIONS 0;";
                }
            else{
                echo 'Invalid DATA!!';
            }
            }
    ?>
    <form metod="POST" action="">
        <div>
            <span>User name :</span>
            <input type="text" name="username1">
        </div>
        <div>
            <span>Password :</span>
            <input type="password" name="password1">
        </div>
        <div>
            <span>Repeat password :</span>
            <input type="password" name="repassword1">
        </div>
        <div>
            <span>email :</span>
            <input type="text" name="email1">
        </div>
        <div>
            <input type="submit" value="registration">
            <input type="hidden" name="submit" value="1">
        </div>
    </form>
</body>
</html>