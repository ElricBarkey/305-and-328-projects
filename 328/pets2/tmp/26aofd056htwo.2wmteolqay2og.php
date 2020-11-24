<!doctype html>
<html lang="en">
<head>
    <title>Pet Order</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href=""></head>
<body>
<div class="container">
    <h1>Order a Pet</h1>

    <form action="#" method="post" class="form-horizontal">

        <!-- get pet -->
        <div class="form-group">
            <label for="pet" class="col-sm-2 control-label">What pet would you like to order?</label>

            <div class="col-sm-4">
                <input class="form-control" type="text" name="pet" id="pet">
            </div>
        </div>

        <!-- get color -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Select a color</label>
            <div class="col-sm-4">
                <select name = "color">
                    <option  name="color" id="red" value="red">red</option><br>
                    <option  name="color" id="purple" value="purple">purple</option><br>
                    <option  name="color" id="blue" value="blue">blue</option>
                </select>
            </div>
        </div>

        <div class="col-xs-3 ">
            <input class="form-control btn btn-default"
                   type="submit" value="Place Order">
        </div>
    </form>
</div>
</body>
</html>