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
            <div class="col-md-6 col-lg-6 form-group">
                <table class="table table-bordered">

                    <tbody>
                        <tr>
                            <td>Name: <?= ($SESSION['myMember']->getFname()) ?> <?= ($SESSION['myMember']->getLname()) ?></td>
                        </tr>
                        <tr>
                            <td>Gender: <?= ($SESSION['myMember']->getGender()) ?></td>
                        </tr>
                        <tr>
                            <td>Age: <?= ($SESSION['myMember']->getAge()) ?></td>
                        </tr>
                        <tr>
                            <td>Phone: <?= ($SESSION['myMember']->getPhone()) ?></td>
                        </tr>
                        <tr>
                            <td>Email: <?= ($SESSION['myMember']->getEmail()) ?></td>
                        </tr>
                        <tr>
                            <td>State: <?= ($SESSION['myMember']->getState()) ?></td>
                        </tr>
                        <tr>
                            <td>Seeking: <?= ($SESSION['myMember']->getSeeking()) ?></td>
                        </tr>

                        <?php if ($SESSION['prem'] === 'prem'): ?>

                            <tr>
                                <td>Interests: <?php if (!empty($SESSION['myMember']->getInDoorInterests())): ?><?= (implode($SESSION['myMember']->getInDoorInterests(), ", ")) ?>, <?php endif; ?>
                                    <?php if (!empty($SESSION['myMember']->getOutDoorInterests())): ?><?= (implode($SESSION['myMember']->getOutDoorInterests(), ", ")) ?>, <?php endif; ?></td>
                            </tr>

                        <?php endif; ?>


                    </tbody>
                </table>
            </div>

            <div class="col-md-6 col-lg-6">
                <div>
                    <img src="images/contact-in-person.png" alt="broken">
                </div>

                <label>Biography</label><br>
                <p><?= ($SESSION['myMember']->getBio()) ?></p>
                <br>

            </div>
            <div class="text-center col-md-12 col-lg-12">
                <input class="btn btn-primary"
                       type="button" value="Contact Me!">
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