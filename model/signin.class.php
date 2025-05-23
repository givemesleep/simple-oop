<?php 

class SignIn extends Dbh {

    public function signUser($userName, $userPswd, $userEmail){
        $SQL = "INSERT INTO tblusers(usrName, usrPwd, usrEmail)
        VALUES(?, ?, ?)";
        $DE = array($userName, $userPswd, $userEmail);
        $STMT = $this->connect()->prepare($SQL);
        $STMT->execute($DE);

        header("location: ../index.php?Suc=Added New User");
        exit();
       

    }

    public function ifEmailExist($userName, $userEmail){
        $SQL = "SELECT * FROM tblusers WHERE usrname = ? OR usrEmail = ?;";
        $DE = array($userName, $userEmail);
        $STMT = $this->connect()->prepare($SQL);

        if(!$STMT->execute($DE)){
            $STMT = null;
            header("location: ../index.php?Err=Failed to find");
            exit();
        }

        $rsltCheck = null;
        if($STMT->rowCount() == 0){
            $rsltCheck = false;
        } else{
            $rsltCheck = true;
        }


        return $rsltCheck; 
        
    }
}

?>