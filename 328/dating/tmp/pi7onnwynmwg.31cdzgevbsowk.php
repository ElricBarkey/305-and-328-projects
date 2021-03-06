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
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h1 class="float-left"><strong>Profile</strong></h1><br>
            </div>

            <div class="col-md-12 col-lg-12">
                <hr>
            </div>

            <div class="col-md-8 col-lg-8 form-group">
                <form method="post" action="#">
                <label><strong>Email</strong></label><br>
                <input class="form-control" type="text" id="email" name="email" value="<?= ($email) ?>">
                    <span class="err">
                        <?php if (isset($errors['email'])): ?>
                            <?= ($errors['email'])."
" ?>
                        <?php endif; ?>
                    </span>
                <br>

                <label><strong>State</strong></label><br>
                <select id="states" name="selectStates">
                    <?php foreach (($myStates?:[]) as $state): ?>
                        <option value="<?= ($state) ?>"> <?= ($state) ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="err">
                    <?php if (isset($errors['selectStates'])): ?>
                        <?= ($errors['selectStates'])."
" ?>
                    <?php endif; ?>
                </span>
                <br>
                <br>

                <label><strong>Seeking</strong></label><br>
                <input type="radio" id="male" name="seeking" value="male"<?php if ($seeking == 'male'): ?>checked = 'checked' <?php endif; ?>>
                <label class="pr-2" for="male">Male</label>

                <input type="radio" id="female" name="seeking" value="female"<?php if ($seeking == 'female'): ?>checked = 'checked' <?php endif; ?>>
                <label for="female">Female</label><br>

                <br>



            </div>

            <div class="col-md-4 col-lg-4">
                <div>
                    <label><strong>Biography</strong></label><br>
                    <textarea class="form-control" rows="5" id="bio" name="bio"><?= ($bio) ?></textarea>
                    <br>
                </div>

                <div class="col-xs-3" id="mybutton">
                    <input class="btn btn-primary float-right"
                           type="submit" value="Next >">
                </div>
            </form>
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