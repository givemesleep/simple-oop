<?php 

class Login extends Dbh {
 
    public function logUserIn($userName, $userPswd){
        $sql = "SELECT * FROM tblusers WHERE usrName = ? AND usrPwd = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($userName, $userPswd));

        if($stmt->rowCount() == 0){
            header("location: ../index.php?Err=Please create an account");
            exit();
        }else{
            $user = $stmt->fetch();
            $Name = $user['usrName'];
            header("location: ../view/dashboard.php?Suc=Welcome Back $Name");
            exit();           
        }
    }

    public function getData(){
        $sql = "SELECT * FROM tblusers";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    

}

?>