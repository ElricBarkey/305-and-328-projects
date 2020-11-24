<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summary</title>
</head>
<body>
    <div class="container">
        <h1>Order Summary</h1>
        <p>Thank you for ordering <?= ($SESSION['food']) ?> for <?= ($SESSION['meal']) ?></p>
        <?php if (isset($SESSION['conds'])): ?>
            <p>Condiments <?= (implode($SESSION['conds'], ", ")) ?></p>
        <?php endif; ?>

        <a href="order">Place another order</a>
        <br>
        <a href="<?= ($BASE) ?>">Home</a>

    </div>
</body>
</html>