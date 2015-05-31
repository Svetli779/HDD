<?php
function isValid($username,$oldpass,$newpass,$repass) {
    $username1='first-user';
    $oldpass1='money';
    if(($username==$username1)&&($oldpass==$oldpass1)&&($newpass==$repass)){
        return TRUE;
    }
 else {
        return FALSE;    
    }
}
if(isset($_POST["hidden"]) && $_POST["hidden"]="1"){
    $username=$_POST['username'];
    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
    $repass=$_POST['repass'];
    $isvalid= isValid($username, $oldpass, $newpass, $repass);
        if($isvalid){
            echo '<div> successful change </div>';
        }
        else {
            echo '<div> WRONG DATA </div>';
        }
}