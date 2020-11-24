<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyles.css">
    <title>Cupcake Fundraiser</title>
</head>
<body>

<div id="main" class="container mt-5">

    <h1>Cupcake Fundraiser</h1>

    <form action="validation.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <label>Cupcake Flavors:</label>
        <div class="form-check form-check">
            <fieldset class="form-group">

        <?php
        //used what we learned form pizza form and applied it and went over how to do this
            $flavors = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon", "carrot"=>"Carrot Walnut",
                "caramel"=>"Salted Caramel Cupcake", "velvet"=>"Red Velvet", "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");

            foreach ($flavors as $type) {

                echo
                    "<div class='form-check'>
                    <input class='form-check-input'
                           type='checkbox'
                           name='cupcakes[]'
                           id='$type'
                           value='$type' >
                    <label class='form-check-label'
                           for='$type'>" .
                        ucfirst($type)//makes first letter a capital
                        . "</label>
            </div>";
            }
        ?>

        </fieldset>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Order</button>
    </form>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>