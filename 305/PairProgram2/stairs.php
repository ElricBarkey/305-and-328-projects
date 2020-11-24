<!--     Benjamin Halbert
Elric Barkey
01/31/2020
This program creates a visual representation
of steps depending on the number inputted by
the user.
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stairs</title>
    <link rel="stylesheet" href="stairsStyle.css">


</head>
<body>

<div class="container" id="formB">

    <form id="stepsform" method="post">

        <fieldset>
            <div class="form-group">
                <label for="steps">Enter number of steps:</label>
                <input type="text" class="form-control" id="steps" name="steps">
                <span class="err" id="errSteps">Please Enter a Number/Positive Number</span>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">submit</button>

    </form>
</div>

<?php
$input = $_POST['steps'];
$steps = $input;

if($input != 0)
{
    echo "<pre>";
    stairsteps($steps);
    echo "</pre>";
}



function stairsteps($steps){

    $head = " o  *****";
    $body = "/|\ *";
    $legs = "/ \ *";
    $base = '*****';
    $space = "";
    $backSpace = "";
    $headSpace = "";

    for($i = 1; $i <= $steps; $i++)
    {
        $base .= '****';
    }

    for($i = 0; $i < $steps; $i++)
    {
        $space = "";

        $backSpace = "   ";
        $headSpace = "";

        for($j = $steps; $j > $i+1; $j--)
        {
            $space .= "    ";
        }

        for($k = $steps-$i; $k < $steps; $k++){
            $backSpace .= "    ";
            $headSpace .= "    ";
        }

        $headSpace = substr($headSpace, 0, ($head.length-1));
        if($i != 0){
            $headSpace .= "*";
        }
        $backSpace .= "*";

        echo "$space$head$headSpace<br>";
        echo "$space$body$backSpace<br>";
        echo "$space$legs$backSpace<br>";
    }

    echo "$base ";

}
?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="stairsJS.js"></script>
</body>
</html>