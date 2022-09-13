<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php $hour = date("h"); ?>
    <?php 
        if($hour < 6 || $hour > 18){
            echo "<b>Night Time</b>";
        } else{
            echo "<i>Day Time</i>";
        }
    ?>

    <!-- Another way or template syntax -->
    <?php if($hour < 6 || $hour > 18) { ?>
        <b>Night Time</b>
    <?php } else { ?>
        <i>Day Time</i>
    <?php } ?>

    <!-- alternative template syntax  -->
    <?php if($hour < 6 || $hour > 18): ?>
        <b>Night Time</b>
    <?php  else : ?>
        <i>Day Time</i>
    <?php endif ?>
</body>
</html>