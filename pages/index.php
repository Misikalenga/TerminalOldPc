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
    <script>
            function loginsubmit(event){
                event.preventDefault();
                let loginActive= document.querySelector(".active");
                let loginNotActive= document.querySelector(".notactive");
                let showlogin= document.querySelector(".showlogin");
                let login = document.getElementById("login").value;
                let loginHide = document.getElementById("login");
                showlogin.textContent = login;
                if (login == "daniel") {
                    loginActive.style.display = 'list-item';
                    loginHide.style.display= 'none';
                }else {
                    loginNotActive.style.display= 'list-item';
                    loginHide.style.display= 'none';
                }
            }
            document.addEventListener("DOMContentLoaded", function(){
                let write = "init Larevel-Demo";
                let speed = 100;
                let position = 0;

                function writeshow() {
                    if (position < write.length) {
                        document.querySelector(".write").innerHTML += write.charAt(position);
                        position++;
                        setTimeout(writeshow, speed);
                    }
                }
                writeshow();
            });
        </script>
        <form onsubmit="loginsubmit(event)">
            <p><span class="useradress">root@laravel-demo:</span><span class="adress">/var/www/laravel-demo/</span>$ <span class="write"></span></p>
            <p>Starting Laravel Demo</p>
            <p>Charging package: /login.py</p>
            <p>Session number: <?php echo $numberSession ;?> - date: <?php echo date("d/m/Y"); ?></p>
            <p>Session IP : <?php echo $ipSession ?></p>
            <p><span class="useradress">root@laravel-demo:</span><span class="adress">/var/www/laravel-demo/</span>$ Please enter your login credentials:
                <input type="text" id="login" class="login" autofocus>
                <span class="showlogin"></span>
                <input type="submit" class="cacher" >
            </p>
        </form>
        <p class="active">c'est bon</p>
        <p class="notactive">c'est pas bon</p>
    </body>

</html>