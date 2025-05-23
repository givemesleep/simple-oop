<?php 
require_once '../model/dbh.class.php';
require_once '../model/login.class.php';

//Create a new instance
$logIn = new Login();

if(isset($_GET['Suc'])){
    $msg = $_GET['Suc'];
}else{
    $msg = null;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-title">
                    <div class="text-center">
                        <h1>User Table</h1>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $users = $logIn->getData();
                                $i = 1;
                                foreach($users as $usr){
                                    echo '
                                        <tr>
                                            <td>'.$i++.'</td>
                                            <td>'.$usr['usrEmail'].'</td>
                                            <td>'.$usr['usrName'].'</td>
                                            <td>'.$usr['usrPwd'].'</td>
                                            <td>
                                                <a href="EditID='.$usr['usrID'].'" class="btn btn-success">Edit</a>
                                                <a href="DelID='.$usr['usrID'].'" class="btn btn-danger">Archive</a>
                                            </td>
                                        </tr>
                                    ';
                                }
                            
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>