<form onsubmit="loginsubmit(event)">

            <p id="p6" class="panim">Incorrect login. The session is locked
                <input type="text" id="login" class="login" autofocus>
                <span class="showlogin"></span>
                <input type="submit" class="cacher" >
            </p>
            <p>Appuie sur Escape pour recharger la page</p>
</form>
<script>
    /*recharge la page*/
    function closeWindows(){
        location.reload();
    }
    /*verifie si on appuie sur la touche*/
    document.addEventListener('keydown', function(event){
        if ( event.key === 'Escape'){
            closeWindows();
        }
    });
</script>