<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Summary</title>
</head>
<body>
    <div class="container">
        <h1>Order Summary</h1>
        <p>Thank you for ordering a <?= ($SESSION['color']) ?> <?= ($SESSION['pet']) ?>!</p>
    </div>
</body>
</html>