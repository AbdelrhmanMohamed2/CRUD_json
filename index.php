<?php require_once 'inc/header.php' ?>
<?php
require_once 'users/users.php';
$all_users = getAllUsers();
?>
<div class="container">
    <div class="row">
        <div class="col-10 m-5">
            <h1>All Users: </h1>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $user['id'] ?></th>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['phone'] ?></td>
                            <td><a href="update.php?id=<?= $user['id'] ?>" class="btn btn-info ms-1">Edit</a><a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-danger ms-1">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>

            </table>
            <hr>
            <a class="btn btn-primary" href="create.php">Create User</a>
        </div>
    </div>
</div>
<?php require_once 'inc/footer.php' ?>