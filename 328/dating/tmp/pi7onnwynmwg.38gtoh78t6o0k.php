<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>My dating website</title>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="./">My Dating Website</a>
    </nav>

    <div id="innerCon">
        <form method="post" action="#">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h1 class="float-left"> <strong>Personal Information</strong></h1><br>
                </div>

                <div class="col-md-12 col-lg-12">
                    <hr>
                </div>

                <div class="col-md-8 col-lg-8 form-group">
                    <label><strong>First Name</strong></label><br>
                    <input class="form-control" type="text" id="firstName" name="fname" value="<?= ($fname) ?>">
                    <span class="err">

                        <?php if (isset($errors['fname'])): ?>
                            <?= ($errors['fname'])."
" ?>
                        <?php endif; ?>
                    </span>
                    <br>

                    <label><strong>Last Name</strong></label><br>
                    <input class="form-control" type="text" id="lastName" name="lname" value="<?= ($lname) ?>">
                    <span class="err">

                        <?php if (isset($errors['lname'])): ?>
                            <?= ($errors['lname'])."
" ?>
                        <?php endif; ?>
                    </span>
                    <br>

                    <label><strong>Age</strong></label><br>
                    <input class="form-control" type="text" id="age" name="age" value="<?= ($age) ?>">
                    <span class="err">
                        <?php if (isset($errors['age'])): ?>
                            <?= ($errors['age'])."
" ?>
                        <?php endif; ?>
                    </span>
                    <br>

                    <label><strong>Gender</strong></label><br>
                    <input type="radio" id="male" name="gender" value="male" <?php if ($gender == 'male'): ?>checked = 'checked' <?php endif; ?>>
                    <label class="pr-2" for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="female"<?php if ($gender == 'female'): ?>checked = 'checked' <?php endif; ?>>
                    <label for="female">Female</label><br>

                    <label><strong>Phone Number</strong></label><br>
                    <input class="form-control" type="text" id="phoneNumber"
                           name="phone" value="<?= ($phone) ?>" placeholder="Ex: 3603009999">
                    <span class="err">
                    <?php if (isset($errors['phone'])): ?>
                        <?= ($errors['phone'])."
" ?>
                    <?php endif; ?>
                    </span>
                    <br>


                    <label ><strong>Premium Membership</strong></label><br>
                    <input  type="checkbox" id="premium" name="premium" <?php if ($premium === 'on'): ?>checked = 'checked' <?php endif; ?>>
                    <label for="premium">Sign me up for a Premium Account</label>

                </div>

                <div class="col-md-4 col-lg-4">
                    <div id="note">
                        <p><strong>Note:</strong> All information entered is protected by our privacy policy.
                            Profile information can only be viewed by others with your permission.
                        </p>

                    </div>

                    <div class="col-xs-3" id="mybutton">
                        <input class="btn btn-primary float-right"
                               type="submit" value="Next >">
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>