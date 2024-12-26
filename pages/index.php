<?php
    require_once '../config.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Terminal site prefo</title>
        <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon">
        <link href="../assets/styles/styles.css" rel="stylesheet">
        <script src="../assets/script/login.js"></script>
        <script src="../assets/script/terminal.js"></script>
    </head>
    <body>

        <form onsubmit="loginsubmit(event)">
            <p id="p1" ><span class="useradress">root@terminal-prefo:</span><span class="adress">/var/www/terminal-prefo/</span>$ <span class="write"></span></p>
            <p id="p2" class="panim">Starting Terminal-prefo</p>
            <p id="p3" class="panim">Charging package: /login.py</p>
            <p id="p4" class="panim">Session number: <?php echo $numberSession ;?> - date: <?php echo date("d/m/Y"); ?></p>
            <p id="p5" class="panim">Session IP : <?php echo $ipSession ?></p> 
            <p id="p6" class="panim"><span class="jaune">▼ ↓ ▼ </span><span class="important">Mode d'emploi </span><span class="jaune">▼ ↓ ▼</span></p> 
            <p id="p7" class="panim">Pour voir <span class="jaune">MON SITE </span>,<span class="important"> écris: Daniel </span> 
                <br/> pour voir <span class="jaune">le site d'un AUTRE ÉLÈVE</span> de ma classe, 
                <span class="important">écris le nom de l'élève</span> 
                <br/> Et pour voir <span class="jaune">la liste de TOUS LES SITES</span> prefo de cette année,<span class="important"> écris prefo</span>.
            </p>
            <p id="p8" class="panim"><span class="jaune">Le nom: des élèves de ma classe: </span> Daniel, Géraldine, JM, Jeremy, Mykyta, Reda, Saïd, Samuel et Sola</p> 
            <p id="p9" class="panim"><span class="useradress">root@terminal-prefo:</span><span class="adress">/var/www/terminal-prefo/</span>$ <span class="write2"></span>
                <input type="text" id="login" class="login" autofocus>
                <span class="showlogin"></span>
                <input type="submit" class="cacher" >
            </p>
        </form>
        <div class="active"><?php include 'charge.php'; ?></div>
        <div class="notactive"><?php include 'notactive.php'; ?></div>
    </body>

</html>