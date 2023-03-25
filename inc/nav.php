<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">TASK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>

                <?php if (!isset($_SESSION['loged'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="register.php">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                    </li>
                <?php endif; ?>


                <?php if (isset($_SESSION['loged'])) : ?>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="products.php">Products</a>
                    </li>

                    <?php if (trim($_SESSION['loged'][2]) === 'abdo@gmail.com') : ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="add_product.php">ADD Product</a>
                        </li>
                    <?php endif; ?>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                    </li>
                <?php endif; ?>

            </ul>

        </div>
    </div>
</nav>