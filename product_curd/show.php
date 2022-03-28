<?php

include_once "./User.php";

$id = null;
$user = null;
if ($_GET['id'])
{
    $id = $_GET['id'];
    $user = User::find($id);
//    var_dump($user);

}else{
    header("location:./index.php");
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

    <title>CURD User</title>

</head>
<body>
<div class="container">
    <?php
    if ($user) { ?>
        <h1> User Infomation</h1><br>

        <h4>Id : <?= $user['id'] ?></h4><br>
        <h4>First Name : <?= $user['firstname'] ?></h4><br>
        <h4>Last name : <?= $user['lastname'] ?></h4><br>
        <h4>Age : <?= $user['age'] ?></h4><br>
        <h4>Email : <?= $user['email'] ?></h4><br>

        <a href="./index.php" class="btn btn-outline-primary">Back to List</a>

    <?php }else {?>
        <h1>User not found</h1>

        <a href="./index.php" class="btn btn-outline-primary">Back to List</a>
    <?php }?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
