<script>
    /*recharge la page avec le bouton close*/
    function closeWindows(){
        location.reload();
    }
    /*menu*/
    function windowsBouton0(){
        document.querySelector(".menu").style.display = "block";
        document.querySelector(".cbar00").style.display = "table-cell";
        document.querySelector(".cbar0").style.display = "none";

    }   
    function windowsBouton00(){
        document.querySelector(".menu").style.display = "none";
        document.querySelector(".cbar0").style.display = "table-cell";
        document.querySelector(".cbar00").style.display = "none";

    }

    /* Agrandir la fenetre*/
    function windowsBouton2() {
        document.querySelector(".windows").style.transform = "translate(-0%, -0%)";
        document.querySelector(".windows").style.top = "0%";
        document.querySelector(".windows").style.left = "0%";
        document.querySelector(".windows").style.height = "100%";
        document.querySelector(".windows").style.width = "100%";
        document.querySelector(".cbar2").style.display = "none";
        document.querySelector(".cbar3").style.display = "table-cell";
        document.querySelector(".max").style.color = "rgb(160, 160, 160)";
        document.querySelector(".menu").style.display = "none";
        document.querySelector(".cbar0").style.display = "table-cell";
        document.querySelector(".cbar00").style.display = "none";
        document.querySelector(".max").style.cursor = "default"

    }
    /* retrecir la fenetre*/
    function windowsBouton3() {
        document.querySelector(".windows").style.transform = "translate(-50%, -50%)";
        document.querySelector(".windows").style.top = "50%";
        document.querySelector(".windows").style.left = "50%";
        document.querySelector(".windows").style.height = "600px";
        document.querySelector(".windows").style.width = "800px";
        document.querySelector(".cbar2").style.display = "table-cell";
        document.querySelector(".cbar3").style.display = "none";
        document.querySelector(".max").style.color = "rgb(0, 0, 0)";
        document.querySelector(".menu").style.display = "none";
        document.querySelector(".cbar0").style.display = "table-cell";
        document.querySelector(".cbar00").style.display = "none";
        document.querySelector(".max").style.cursor = "pointer"

    }

    /*afficher l'icone*/
    function windowsBouton1() {
        document.querySelector(".iconwindows").style.display = "list-item";
        document.querySelector(".windows").style.display = "none";
        document.querySelector(".menu").style.display = "none";
        document.querySelector(".cbar0").style.display = "table-cell";
        document.querySelector(".cbar00").style.display = "none";
    }
    /* afficher la fenetre*/
    function iconclick(){
        document.querySelector(".iconwindows").style.display = "none";
        document.querySelector(".windows").style.display = "table";  
        document.querySelector(".menu").style.display = "none";
        document.querySelector(".cbar0").style.display = "table-cell";
        document.querySelector(".cbar00").style.display = "none";

    }

</script>
<div class="iconwindows" onclick="iconclick()"><img src="../assets/img/Program_Manager.webp"><div class="centertexticon">"<p class="texticon"></div></p></div>
<table class="windows" id="win">
    <thead>
        <tr>
            <th class="cbar0"><div class="dbar"  onclick="windowsBouton0()" ><h1 class="fleche0" >─</h1></div></th>
            <th class="cbar00"><div class="dbar"  onclick="windowsBouton00()" ><h1 class="fleche00" >─</h1></div></th>
            <th class="bar"><div class="wbar"><h1 class="fleche3">Windows</h1></div></th>
            <th class="cbar"  ><div class="dbar" onclick="windowsBouton1()"><h1 class="fleche" >▼</h1></div></th>
            <th class="cbar2"  ><div class="dbar" onclick="windowsBouton2()"><h1 class="fleche" >▲</h1></div></th>
            <th class="cbar3"  ><div class="dbar" onclick="windowsBouton3()"><h1 class="fleche2" >▲</h1><h1 class="fleche2">▼</h1></div></th>
        </tr>
    </thead>
    <tbody>
        <tr >
            <td   scope="row" colspan="4">
                <div class="menu">
                    <ul class="list">
                        <li class="min" onclick="windowsBouton1()">Minimize</li>
                        <li class="max" onclick="windowsBouton2()">Maximize</li>
                        <li class="close" onclick="closeWindows()">Close</li>
                    </ul>
                </div>
                
                <iframe id="daniel" src="https://2025.webdev-cf2m.be/daniel/prefo/public/" > </iframe>

                <iframe id="geraldine" src="https://2025.webdev-cf2m.be/geraldine/siteprefo/" > </iframe>

                <iframe id="jm" src="https://2025.webdev-cf2m.be/jean-michael/prefo/" > </iframe>

                <iframe id="jeremy" src="https://2025.webdev-cf2m.be/jeremy/projet-prefo-Jeremy/" > </iframe>

                <iframe id="mykyta" src="https://2025.webdev-cf2m.be/mykyta/prefo/" > </iframe>

                <iframe id="reda" src="https://2025.webdev-cf2m.be/reda/prefo/" > </iframe>

                <iframe id="said" src="https://2025.webdev-cf2m.be/said/prefo/" > </iframe>

                <iframe id="samuel" src="https://2025.webdev-cf2m.be/samuel/prefo/" > </iframe>

                <iframe id="sola" src="https://2025.webdev-cf2m.be/sola/prefo/projet_prefo_2/" > </iframe>

                <iframe id="prefo" src="https://2025.webdev-cf2m.be/" > </iframe>
            </td>
        </tr>
    </tbody>
</table>