<?php
    require_once '../config.php'

?>

<DOCTYPE html>
<html lang="fr">
    <head>
        <title>Laravel Demo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../assets/images/fivicon.ico" type="image/x-icon">
        <link href="../assets/styles/styles.css" rel="stylesheet">
    </head>
    <body>
        <form action="/submit" method="post">
            <p><span class="useradress">root@laravel-demo:</span><span class="adress">/var/www/laravel-demo/</span>$ init Larevel-Demo</p>
            <p>Starting Laravel Demo</p>
            <p>Charging package: /login.py</p>
            <p>Session number: <?php echo $numberSession ;?> - date: <?php echo date("d/m/Y"); ?></p>
            <p>Session IP : <?php echo $ipSession ?></p>
            <p><span class="useradress">root@laravel-demo:</span><span class="adress">/var/www/laravel-demo/</span>$ Please enter your login credentials.
            <input type="text" name="login">
            <input type="submit" class="cacher" >
        </form>

    </body>

</html>