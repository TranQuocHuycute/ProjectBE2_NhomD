<html style="background-color: #f3f3f4;">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style-3.less', 'css/style-3.css');
        ?>
        <link href="css/style-3.css" rel="stylesheet" type="text/css" />
    </head>
    <!-- module 3 -->
    <?php include '../3/3-content.php'; ?>
    
    <script src="./js/bootstrap.bundle.min.js"></script>
</html>