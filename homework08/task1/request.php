<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
            <style>
        form{
            width: 300px;
            height: 200px;
            border: 1px solid green;
            margin-left: 15px;
            margin-top: 15px;
        }
        div{
            margin: 2px;
        }
    </style>
    </head>
    <body>
        <form method="post" action="response.php">
            <div>
                <span>User name :</span>
                <input type="text" name="username" value="first-user"/>
            </div>
            <div>
                <span>Old password :</span>
                <input type="password" name="oldpass" value="money"/>
            </div>
            <div>
                <span>New password :</span>
                <input type="password" name="newpass" value="moremoney"/>
            </div>
            <div>
                <span>Repeat password :</span>
                <input type="password" name="repass" value="moremoney"/>
            </div>
            <div>
                <input type="hidden" name="hidden" value="1" />
                <input type="submit" value="submit"/>
            </div>
        </form>
    </body>
</html>