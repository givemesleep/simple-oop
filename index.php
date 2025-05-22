<?php 

if(isset($_GET['Err'])){
    $err = $_GET['Err'];
    $msg = '
    <div class="alert alert-warning" role="alert">
        <h4><strong>Error!</strong> '.$err.'</h4>
    </div>
    ';
} else{
    $msg = null;
    $err = null;
}

if(isset($_GET['Suc'])){
    $suc = $_GET['Suc'];
    $msg = '
    <div class="alert alert-success" role="alert">
        <h4><strong>Success!</strong> '.$suc.'</h4>
    </div>
    ';
} else{
    $suc = null;
    $msg = null;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>OOP | PHP</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 mt-5">
                <div class="card" style="border: solid 1px">
                    <div class="card-title text-center mt-3">
                        <h1>Sign Up</h1>
                          <?php 
                              echo $msg;
                          ?>
                    </div>
                    <form action="process/login.proc.php" method="POST">
                        <div class="row g-3 mb-2">
                          
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="usrname" id="username" placeholder="Username" required>
                          </div>
                          <div class="col-md-2"></div>

                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" name="usremail" id="Email" placeholder="Email" required>
                          </div>
                          <div class="col-md-2"></div>

                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                            <label for="userpswd">Password</label>
                            <input type="password" class="form-control" name="usrpswd" id="userpswd" placeholder="Password" required>
                          </div>
                          <div class="col-md-2"></div>

                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                            <label for="repswd">Re-type Password</label>
                            <input type="password" class="form-control" name="repswd" id="repswd" placeholder="Re-type Password" required>
                          </div>
                          <div class="col-md-2"></div>

                          <div class="d-grid gap-2 col-8 mx-auto">
                            <button class="btn btn-success" type="submit" name="signup">Sign Up</button>
                          </div>

                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="d-grid col-8 text-center">
                            <!-- <a href="view/login.php"><button class="btn btn-secondary">Login</button></a> -->
                            <p>Already have an account? <a href="view/login.php"><u>Login</u></a> </p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
