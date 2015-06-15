<?php 
class Users{
    public function index(){
        html_header();
        echo 'Users->index page';
        html_footer();
}
}
    function login(){
        $username = Validate::post('name');
        $password = Validate::post('pass');
        
        $username = 'Ivan';
        $password = '1234';
        $db = DB::getInstance();
        $user = $db->queryOne("SELECT*FROM user WHERE username='$username' and pass='$password'");
        if($user){
            //da vidq tova za kakwo e i da sloja podhudq6toto
            echo"<pre>".print_r($user,true)."</pre>";
            echo 'Successful Login';
        }
        else {
            echo 'Wrong Data !';
        }
        if($username !=null && $password !=null){
            //това защо е празно
        }
    }
    html_header();
?>
<div>
<h3>Registration new User :</h3>
<a href="/pages/registration.php">GO</a>
</div>
<br/>
<br/>
<br/>
<form action="?controller=user&action=login" method="post">
    <div>
        <span>User Name:</span>
        <input type="text" name="name">
    </div>
    <div>
        <span>Password :</span>
        <input type="password" name="pass">
    </div>
    <button type="submit" value="submit">Login</button>
</form>
<?php
html_footer();