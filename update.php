<?php require_once 'inc/header.php' ?>
<?php
$user_id = $_GET['id'];
require_once 'users/users.php';
$user = getOneUser($user_id);
?>
<div class="container">
    <div class="row">
        <div class="col-8 m-5">
            <h1>Create New User :</h1>
            <hr>
            <form method="POST" action="handlers/update_handler.php">

                <div class="mb-3">
                    <input type="text" hidden class="form-control" name="id" value="<?= $user['id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">User Name</label>
                    <input type="text" value="<?= $user['name'] ?>" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?= $user['email'] ?>" name="email" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?= $user['phone'] ?>" id="phone" aria-describedby="emailHelp">
                </div>




                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'inc/footer.php' ?>