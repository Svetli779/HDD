<?php
function isValid($username,$pass,$repass,$email,$fname,$lname,$sex,$bdate,$sa) {

    if(isset($username,$pass,$repass,$email,$fname,$lname,$sex,$bdate,$sa)){
        return TRUE;
    }
 else {
        return FALSE;    
    }
}
function isChecked($username,$pass,$repass,$fname,$lname,$sa){

    if(mb_strlen($username)>3 && mb_strlen($pass)>5 && mb_strlen($repass)>5 && mb_strlen($fname)>3
            && mb_strlen($lname)>5 && mb_strlen($sa)>2 &&$pass==$repass){
                return TRUE;
    }
    else {
                return FALSE;    
    }
}
    function checkEmailValid($email){   
    if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/", $email)){
        return true;
    }
    else{
        return false;
    }
}
function isEscape($username,$pass,$repass,$fname,$lname,$sa,$bdate,$sex) {
    if(htmlspecialchars($username) && htmlspecialchars($pass) && htmlspecialchars($pass) &&
            htmlspecialchars($repass) && htmlentities($fname) && htmlentities($lname) &&
            htmlentities($sa && htmlentities($bdate) && htmlentities($sex))){
        return TRUE;
    }
    else {
        return FALSE;
    }
}
if(isset($_POST["hidden"])&&($_POST["hidden"]="1")){
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];
    $email=$_POST['email'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $sex=$_POST['sex'];
    $bdate=$_POST['date'];
    $sa=$_POST['sa'];
    $isvalid=  isValid($username,$pass,$repass,$email,$fname,$lname,$sex,$bdate,$sa);
    $ischecked=  isChecked($username, $pass, $repass,$fname,$lname,$sa);
    $validemail=  checkEmailValid($email);
    $isescape= isEscape($username, $pass, $repass, $fname, $lname, $sa, $bdate, $sex);
    if($isvalid && $validemail && $ischecked && $isescape){
        echo 'succses';
    }
 else {
        echo 'wrong data';    
    }
}
