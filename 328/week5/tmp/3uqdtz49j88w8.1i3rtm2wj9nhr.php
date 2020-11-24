<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 5 Info</title>
</head>
<body>
    <h1><?= ($title) ?></h1>
    <h1>Can you believe its week 5 already</h1>
    <h1>we are almost half way there!</h1>

    <p>You are logged in as <?= ($username) ?> with the password <?= ($password) ?></p>

    <h2>Temperature</h2>
    <h2>Fahrenheit: <?= ($temp) ?></h2>
    <h2>Celsius: <?= (round(($temp - 32) * (5/9), 2)) ?></h2>

    <h2>I like <?= ($color) ?></h2>
    <h2>The circumference of the circle is <?= ($radius * 2 * 3.14) ?></h2>

    <h2>Fruits</h2>
    <?php foreach (($fruits?:[]) as $fruit): ?>
        <p><?= ($fruit) ?></p>
    <?php endforeach; ?>
    <br>

    <h3>Dessert Options</h3>
    <?php foreach (($desserts?:[]) as $val=>$text): ?>
        <input type="checkbox" value="<?= ($val) ?>"><?= ($text) ?></input><br>
    <?php endforeach; ?>

    <h2>conditional content</h2>
    <?php if ($preferredCustomer): ?>
        
            <strong>Thank you!</strong>
        
        <?php else: ?>
            <strong> You are missing out</strong>
        

    <?php endif; ?>
</body>
</html>