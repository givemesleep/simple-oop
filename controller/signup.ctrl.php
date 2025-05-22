<?php 

class SignCtrl extends SignIn{

    //Create a objects
    private $usrName;
    private $usrPswd;
    private $usrRePswd;
    private $usrEmails;

    //Constructor
    public function __construct( $userName, $userPswd, $userRePswd, $userEmail){
        $this->usrName = $userName;
        $this->usrPswd = $userPswd;
        $this->usrRePswd = $userRePswd;
        $this->usrEmails = $userEmail;
    }

    //Error Validation

    public function CreateUser(){
        if($this->isEmpty() == true){
            header("location: ../index.php?Err=Empty Fields");
            exit();
        }
        if($this->isPswdMatch() == true){
            header("location: ../index.php?Err=Password do not match");
            exit();
        }
        if($this->ifEmailExist($this->usrName, $this->usrEmails) == true){
            header("location: ../index.php?Err=User already exist");
            exit();
        }

        // // Call signUser from signin.class.php
        // $signIn = new signUser(); // Make sure SignIn class is loaded via require_once
        $this->signUser($this->usrName, $this->usrPswd, $this->usrEmails);
        }

    private function isEmpty(){
        $result = null;
        if(empty($this->usrName) || empty($this->usrPswd) || empty($this->usrRePswd) || empty($this->usrEmails)){
            $result = true;
        } else{
            $result = false;

        }
        return $result;
    }

    private function isPswdMatch(){
        $result = null;
        if($this->usrPswd != $this->usrRePswd){
            $result = true;
        } else{
            $result = false;
        }
        return $result;

    }

}


?>