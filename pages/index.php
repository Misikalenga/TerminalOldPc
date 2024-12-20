<?php
    require_once '../config.php';

?>

<DOCTYPE html>
<html lang="fr">
    <head>
        <title>Laravel Demo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../assets/images/fivicon.ico" type="image/x-icon">
        <link href="../assets/styles/styles.css" rel="stylesheet">
        <script src="../assets/script/login.js"></script>
        <script src="../assets/script/terminal.js"></script>
    </head>
    <body>

        <form onsubmit="loginsubmit(event)">
            <p id="p1" ><span class="useradress">root@laravel-demo:</span><span class="adress">/var/www/laravel-demo/</span>$ <span class="write"></span></p>
            <p id="p2" class="panim">Starting Laravel Demo</p>
            <p id="p3" class="panim">Charging package: /login.py</p>
            <p id="p4" class="panim">Session number: <?php echo $numberSession ;?> - date: <?php echo date("d/m/Y"); ?></p>
            <p id="p5" class="panim">Session IP : <?php echo $ipSession ?></p>
            <p id="p6" class="panim"><span class="useradress">root@laravel-demo:</span><span class="adress">/var/www/laravel-demo/</span>$ <span class="write2"></span>
                <input type="text" id="login" class="login" autofocus>
                <span class="showlogin"></span>
                <input type="submit" class="cacher" >
            </p>
        </form>
        <div class="active"><?php include 'charge.php'; ?></div>
        <div class="notactive"><?php include 'notactive.php'; ?></div>
    </body>

</html>