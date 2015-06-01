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
    </style>
</head>
<body>
    <?php
    function isValid($name,$age){
        if(mb_strlen($name,"UTF-8")>3 && mb_strlen($age,"UTF-8")>0){
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    if(isset($_POST["sent"])&&$_POST["sent"]==1){
        $name=$_POST["name"];
        $age=$_POST["age"];
        $isvalid=  isValid($name, $age);
        $connection = mysqli_connect('localhost' , 'phpcourseUser' , 'SomeHardPassword1','kindergarder');
if (!$connection) {
	die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
} 

mysqli_set_charset($connection, "utf8");
        if (!$connection)
        {
            die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
            
        }
        $sql ="INSERT INTO kindergarder.children (Name,Age,KinderGarderID) VALUES ('$name','$age','2');";
        
        $result = mysqli_query($connection , $sql);
        if($result === true)
        {
 
            echo 'ok';
        }
        else
        {
            echo 'not ok';
        }
    }
    ?>
<form action="" method="POST" >
    <div>
        <p>Kindergarder : Детски Рай </p>
    </div>
	<div>
		<span>Name:</span>
                <input type="text" name="name"/>
	</div>
	<div>
		<span>Age:</span>
                <input type="number" name="age"/>
	</div>
	<div>
		<input type="hidden" name="sent" value="1" />
		<input type="submit" value="submit" />
	</div>
</form>	
</body>
</html>