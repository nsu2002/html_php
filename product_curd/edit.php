<?php

include_once "./User.php";
$id = null;
$user = null;

if ($_GET['id'])
{
    $id = $_GET['id'];
    $user = User::find($id);

}else{
    header("location:./index.php");
}

$errors =  [];



//xu ly update
if (isset($_POST['edit'])) {
    $errors = validate($_POST, ['firstname', 'lastname', 'age', 'email']);
    if (count($errors) <= 0)
    {
        $dataUpdate = [
            'id' => $_POST['id'],
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'age' => $_POST['age'],
            'email' => $_POST['email'],

        ];

        $userCreate = User::update($dataUpdate);
        $_SESSION['message'] = "Update Successfully";
        $errors = [];
        header("location:./index.php");

    }
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

    <title>Edit USER</title>
</head>
<body>

<div class="container"><br>

    <div>
        <h2>Edit User</h2>
    </div><br>
    <div>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First name</label>
                <input type="text" name="firstname" value="<?= $user['firstname'] ?>" class="form-control">
                <div class="text-danger">
                    <?php echo isset($errors['firstname']) ? $errors['firstname'] :"" ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last name</label>
                <input type="text" name="lastname" value="<?= $user['lastname'] ?>" class="form-control" id="last name" >
                <div class="text-danger">
                    <?php echo isset($errors['lastname']) ? $errors['lastname'] :"" ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age</label>
                <input type="text" name="age" value="<?= $user['age'] ?>"  class="form-control" id="age" >
                <div class="text-danger">
                    <?php echo isset($errors['age']) ? $errors['age'] :"" ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="text-danger">
                    <?php echo isset($errors['email']) ? $errors['email'] :"" ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Update</button>
        </form>
        </form>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>