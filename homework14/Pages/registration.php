<?php 
class Registration{
    public function index(){
        html_header();
        echo 'registration->registration page';
        html_footer();
}
}
function login(){
        $username = Validate::post('name');
        $password = Validate::post('pass');
        $db = DB::getInstance();
        $form = $db->queryOne("INSERT INTO users (ID,username,password,email)
VALUES (null,'$username','$password','$email');");
        if($user){
            //da vidq tova za kakwo e i da sloja podhudq6toto
            echo"<pre>".print_r($form,true)."</pre>";
            echo 'Successful create user';
        }
        else {
            echo 'Wrong Data !';
        }
    }
    //html_header();
?>
<form action="?controller=registration&action=create user" method="post">
    <div>
        <span>User Name:</span>
        <input type="text" name="name">
    </div>
    <div>
        <span>Password :</span>
        <input type="password" name="pass">
    </div>
    <div>
        <span>Repeat Password :</span>
        <input type="password" name="repass">
    </div>
    <div>
        <span>Email :</span>
        <input type="text" name="email">
    </div>
    <button type="submit">Create user</button>
</form>
<?php
//html_footer();