<?php
include 'control.php';
if ($_SESSION['userName'] == 'Guest') {
    header ( "Location: https://$host$uri/index.php" );
    exit();
}
include 'header.php';
?>
</head>
<body>
    <?php
        include 'jumbotron.php';
        include 'navbar.php';
    ?>
    <p align="center">This is your cart</p>
</body>
<?php
    include 'footer.php';
?>
