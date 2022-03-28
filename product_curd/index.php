<?php

include_once "./User.php";
$Users = User::all();

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Infomation</title>
</head>
<body>

<div class="container"><br>
    <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
       <p>
           <?php echo ($_SESSION['message']); unset($_SESSION['message'])  ?>
       </p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div
        <?php } ?>
    <a href="./create.php" class="btn btn-primary">Create</a><br><br>

    <?php if (count($Users) > 0) {?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
         <?php foreach ($Users as $user) { ?>
        <tr>
            <th scope="row"><?= $user['id']?></th>
            <td><?= $user['firstname']?></td>
            <td><?= $user['lastname']?></td>
            <td><?= $user['age']?></td>
            <td><?= $user['email']?></td>

            <td>
                <a href="./show.php?id=<?= $user['id']?>" class="btn btn-success"> Show</a>
                <a href="./edit.php?id=<?= $user['id']?>" class="btn btn-warning"> Edit</a>
                <form action="./delete.php" method="post">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button class="btn btn-danger"> Delete</button>
                </form>
            </td>

        </tr>
          <?php } ?>
        </tbody>
    </table>
    <?php }else {?>
        <h3> Đếu có dữ liệu đâuu !!!!</h3>
    <?php } ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>