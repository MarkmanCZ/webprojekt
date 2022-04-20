<?php

if(isset($_POST['submit'])) {

    $full_name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $nick = $_POST['userNick'];
    $pwd = $_POST['userPwd'];
    $pwdCheck = $_POST['userPwdCheck'];

    //includes classes
    include '../classes/class.db.php';
    include '../classes/class.register-contr.php';
    include '../classes/class.register.php';
    //instantiate classes
    $register = new Register($full_name, $email, $nick, $pwd, $pwdCheck);

    //error checks, register
    if($register->checkEmptyInputs() !== false) {
        header("location: ../index.php?error=emptyfields");
    }
    else if($register->checkPwdMatch() !== false) {
        header("location: ../index.php?error=pwdmatch");
    }
    else if($register->verifyEmail() !== false) {
        header("location: ../index.php?error=email");
    }
    else if($register->verifyNickName() !== false) {
        header("location: ../index.php?error=nickname");
    }
    else if($register->checkUid() !== false) {
        header("location: ../index.php?error=userexists");
    }

    $register->registerUser();
    //return with happy message
    header("location: ../index.php?error=none");

}else {
    header("location: ../index.php#showcase");
}