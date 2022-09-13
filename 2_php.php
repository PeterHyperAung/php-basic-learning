<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Home Page</h1>
    <p>
        Total: 
        <?php 
        $num1 = 3;
        $num2 = 5;
        ?>
        <p>
            <!-- Output tag or Short hand way to show the result instead of using echo -->
            <?= $num1 + $num2; ?>
        </p>
    </p>
</body>
</html>