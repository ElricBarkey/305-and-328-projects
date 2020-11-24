<!doctype html>
<html lang="en">
<head>
    <?php echo $this->render('includes/head.html',NULL,get_defined_vars(),0); ?>
    <title>Student Search</title>
</head>
<body>

<!-- Nav bar -->
<?php echo $this->render('includes/nav.html',NULL,get_defined_vars(),0); ?>

<!-- Page content -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h1 class="my-5">Student Finder</h1>

            <!-- Search form -->
            <form method="post" action="">
                <div class="form-group">
                    <label for="search">Search student by first or last name</label>
                    <input type="text" class="form-control" id="search" name="search">
                </div>

                <!-- Search button -->
                <button type="submit" id="button" class="btn btn-primary btn-block">Search</button>

            </form>

        </div>

    </div>

</div>


</body>
</html>