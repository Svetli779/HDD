<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User FORM</title>
    <style>
        form{
            width: 300px;
            height: 350px;
            border: 1px solid blue;
            margin-left: 15px;
            margin-top: 15px;
        }
        div{
            margin: 2px;
        }
    </style>
</head>
<body>
    <form action="userform_request.php" method="post">
        <div>
            <span>User name :</span>
            <input type="text" name="username"/>
        </div>
        <div>
            <span>Password :</span>
            <input type="password" name="pass"/>
        </div>
        <div>
            <span>Repeat password :</span>
            <input type="password" name="repass"/>
        </div>
        <div>
            <span>Secret question :</span>
            <select>
                <option>What is your favorite color</option>
                <option>What is your favorite car</option>
                <option>What is your favorite pet</option>
            </select>
        </div>
        <div>
            <span>Secret answer :</span>
            <input type="text" name="sa">
        </div>
        <div>
            <span>Email :</span>
            <input type="email" name="email"/>
        </div>
        <div>
            <span>First Name :</span>
            <input type="text" name="fname"/>
        </div>
        <div>
            <span>Last Name :</span>
            <input type="text" name="lname"/>
        </div>
        <div>
            <span>Sex :</span>
            <input type="radio" name="sex" value="male" checked/>male
            <input type="radio" name="sex" value="female"/>female
        </div>
        <div>
            <span>Birth date</span>
            <input type="date" name="date"/>
        </div>
        <div>
            <input type="hidden" name="hidden" value="1"/>
            <input type="submit" value="submit"/>
        </div>
    </form>
</body>
</html>