<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../../css/code/common.css">
    <title>Room</title>
</head>

<body>
    <?php
    include './../code/room.php'
    ?>

    <div class="parent-div">
        <div class="child-div1">
            <span class="text">Single Bed</span>
            <span class="text-num"><?php echo "$singleBed" ?></span>
        </div>

        <div class="child-div2">
            <span class="text">Double Bed</span>
            <span class="text-num"><?php echo "$doubleBed" ?></span>
        </div>

        <div class="child-div3">
            <span class="text">Two Window</span>
            <span class="text-num"><?php echo "$twoWindow" ?></span>
        </div>

        <div class="child-div4">
            <span class="text">Luxury</span>
            <span class="text-num"><?php echo "$luxury" ?></span>
        </div>
    </div>

    <div class="update">

    </div>

</body>

</html>