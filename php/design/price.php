<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../css/code/price.css">
    <title>Price</title>
</head>

<body>
    <?php
    include './../code/price.php';
    ?>

    <div class="parent-div">
        <div class="child-div1">
            <span class="text">VIP</span>
            <span class="text-num"><?php echo "$vip" ?></span>
        </div>

        <div class="child-div2">
            <span class="text">General</span>
            <span class="text-num"><?php echo "$general" ?></span>
        </div>

        <div class="child-div3">
            <span class="text">PerDay Cost</span>
            <span class="text-num"><?php echo "$perDay" ?></span>
        </div>

        <div class="child-div4">
            <span class="text">Single Bed</span>
            <span class="text-num"><?php echo "$singleBed" ?></span>
        </div>

        <div class="child-div5">
            <span class="text">Double Bed</span>
            <span class="text-num"><?php echo "$doubleBed" ?></span>
        </div>
    </div>
</body>

</html>