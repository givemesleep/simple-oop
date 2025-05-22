<?php 

class LoginCtrl extends Login{

    //Create a objects
    private $usrName;
    private $usrPswd;

    //Constructor
    public function __construct( $userName, $userPswd){
        $this->usrName = $userName;
        $this->usrPswd = $userPswd;
    }

    //Error Validation

    public function logUser(){
        if($this->isEmpty() == true){
            header("location: ../view/login.php?Err=Stuck Here");
            exit();
        }

        $this->logUserIn($this->usrName, $this->usrPswd);
    }

    private function isEmpty(){
        $result = null;
        if(empty($this->usrName) || empty($this->usrPswd)){
            $result = true;
        } else{
            $result = false;

        }
        return $result;
    }

}


?>