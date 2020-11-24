<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>My dating website</title>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="./">My Dating Website</a>
    </nav>

    <div id="innerCon">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h1 class="float-left"><strong>Interests</strong></h1><br>
            </div>

            <div class="col-md-12 col-lg-12">
                <hr>
            </div>

            <div class="col-md-10 col-lg-10 form-group">

                <label><strong>In-door Interests</strong></label><br>
                <?php foreach (($interests?:[]) as $interest): ?>
                    <input type="checkbox" name="indoor[]" value="<?= ($interest) ?>"> <?= ($interest) ?></input><br>
                <?php endforeach; ?>

                <label><strong>Out-door Interests</strong></label><br>
                <?php foreach (($interests?:[]) as $interest): ?>
                    <input type="checkbox" name="outdoor[]" value="<?= ($interest) ?>"> <?= ($interest) ?></input><br>
                <?php endforeach; ?>

            </div>

            <div class="text-center " id="mybutton2">
                <input class="btn btn-primary float-right"
                       type="submit" value="Next >">
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>