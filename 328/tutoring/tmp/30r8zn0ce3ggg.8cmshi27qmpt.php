<!doctype html>
<html lang="en">
<head>
    <?php echo $this->render('includes/head.html',NULL,get_defined_vars(),0); ?>
    <title>Tutor Login</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h1 class="my-5">Tutor Login</h1>

            <form method="post" action="" class="bg-light p-5" novalidate>

                <!-- Email -->
                <div class="form-group">
                    <label for="loginEmail">Email</label>
                    <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="login email" placeholder="Enter email" value="<?= ($loginEmail) ?>">
                    <?php if (isset($errors['loginEmail'])): ?>
                        <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['loginEmail']) ?></div>
                    <?php endif; ?>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    <?php if (isset($errors['password'])): ?>
                        <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['password']) ?></div>
                    <?php endif; ?>
                </div>

                <!-- Login button -->
                <button type="submit" class="btn btn-primary btn-block">Login</button>

            </form>
        </div>
    </div>

</div>

</body>
</html>