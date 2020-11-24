<!doctype html>
<html lang="en">
<head>
    <?php echo $this->render('includes/head.html',NULL,get_defined_vars(),0); ?>
    <title>New Student</title>
</head>
<body>

<!-- Nav bar -->
<?php echo $this->render('includes/nav.html',NULL,get_defined_vars(),0); ?>

<!-- Page content -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h1 class="my-5">Add New Student</h1>

            <!-- New student form -->
            <form method="post" action="#" class="bg-light p-5 mb-3" novalidate>

                <!-- First name -->
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="first name" placeholder="" value="<?= ($fname) ?>">
                    <?php if (isset($errors['fname'])): ?>
                        <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['fname']) ?></div>
                    <?php endif; ?>
                </div>

                <!-- Last name -->
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="last name" placeholder="" value="<?= ($lname) ?>">
                    <?php if (isset($errors['lname'])): ?>
                        <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['lname']) ?></div>
                    <?php endif; ?>
                </div>

                <!-- SID -->
                <div class="form-group">
                    <label for="sid">Student Identification (SID) Number</label>
                    <input type="text" class="form-control" id="sid" name="sid" aria-describedby="student id number" placeholder="" value="<?= ($sid) ?>">
                    <?php if (isset($errors['sid'])): ?>
                        <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['sid']) ?></div>
                    <?php endif; ?>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="" value="<?= ($email) ?>">
                    <?php if (isset($errors['email'])): ?>
                        <div class="small my-1 py-1 alert alert-dark" role="alert"><?= ($errors['email']) ?></div>
                    <?php endif; ?>
                </div>

                <!-- Tutor -->
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="isTutor" name="isTutor" <?php if ($isTutor): ?>checked='checked'<?php endif; ?>>
                    <label class="form-check-label" for="isTutor">Yes, this student is a tutor</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>

        </div>

    </div>

</div>


</body>
</html>