<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../css/code/common.css">
    <title>Salary</title>
</head>

<body>
    <?php
    include './../code/salary.php';
    ?>

    <div class="parent-div">
        <div class="child-div1">
            <span class="text">General</span>
            <span class="text-num"><?php echo "$general" ?></span>
        </div>

        <div class="child-div2">
            <span class="text">Senior</span>
            <span class="text-num"><?php echo "$senior" ?></span>
        </div>

        <div class="child-div3">
            <span class="text">Worker</span>
            <span class="text-num"><?php echo "$worker" ?></span>
        </div>

        <div class="child-div4">
            <span class="text">Waiter</span>
            <span class="text-num"><?php echo "$waiter" ?></span>
        </div>
    </div>
</body>

</html>