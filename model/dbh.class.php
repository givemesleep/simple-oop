<?php 

class Dbh {

    protected function connect(){
        try{
            $dsn = "mysql:host=localhost;dbname=dboop";
            $usrname = "husto";
            $pswd = "0730";

            $conn = new PDO($dsn, $usrname, $pswd);
            return $conn; //Return the connection

        }catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            die(); //Kill Connection if error
        }
    }

}


?>