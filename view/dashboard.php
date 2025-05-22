<?php 

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
</head>
<body>
    <h1><?php echo $msg; ?></h1>
</body>
</html>