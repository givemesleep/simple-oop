<?php 

//Isset Sign Up
if(isset($_POST['signup'])){
    $userName = $_POST['usrname'];
    $userPswd = $_POST['usrpswd'];
    $userRePswd = $_POST['repswd'];
    $userEmail = $_POST['usremail'];

    //Includes
    require_once '../model/dbh.class.php';
    require_once '../model/signin.class.php';
    require_once '../controller/signup.ctrl.php';

    //Create a new instance
    $signIn = new SignCtrl( $userName, $userPswd, $userRePswd, $userEmail);

    $signIn->CreateUser();
    header("location: ../index.php?Suc=Added New User");


}

//Isset Login
if(isset($_POST['logme'])){

    //Post
    $userName = $_POST['usrname'];
    $userPswd = $_POST['usrpswd'];

    //Includes
    require_once '../model/dbh.class.php';
    require_once '../model/login.class.php';
    require_once '../controller/login.crtl.php';

    //Create a new instance
    $logIn = new LoginCtrl( $userName, $userPswd);
    $logIn->logUser();


}else{
    header("location: ../view/login.php?Err=Failed to login");
}

?>