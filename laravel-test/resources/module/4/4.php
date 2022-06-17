<html style="background-color: #f3f3f4;">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/all.css">

    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/style-4.less', 'css/style-4.css');
    ?>
    <link href="css/style-4.css" rel="stylesheet" type="text/css" />
</head>
<!-- module 4 -->
<?php include '../4/4-content.php'; ?>

<!-- có thể bỏ vào col bao nhiêu cũng được -->

<!-- <div class="row">
    <div class="col-md-3">
        <php include '../4/4-content.php'; ?>
    </div>
</div> -->


<!-- js -->
<script src="./js/bootstrap.bundle.min.js"></script>

</html>