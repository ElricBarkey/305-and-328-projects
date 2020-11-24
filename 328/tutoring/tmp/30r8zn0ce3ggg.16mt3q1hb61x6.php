<!doctype html>
<html lang="en">
<head>
    <?php echo $this->render('includes/head.html',NULL,get_defined_vars(),0); ?>
    <title>Tutor Login</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">

            <h1 class="m-5">Tutor Login</h1>

            <form method="post" action="" class="bg-light p-5">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>