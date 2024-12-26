
function scrollToBottom() {
    window.scrollTo(0, document.body.scrollHeight);
}

function loginsubmit(event){ /* verifie le login est bon */
    event.preventDefault();
    let loginActive= document.querySelector(".active"); /* appel le texte a afficher si le login est bon */
    let loginNotActive= document.querySelector(".notactive"); /* appel le texte a afficher si le login n'est pas bon */
    let showlogin= document.querySelector(".showlogin"); /* appel la balise qui va remplacer l'input */
    let login = document.getElementById("login").value.toLowerCase();  /* enregistre en minuscule, dans une variable ce qu'il y a dans input */
    console.log(login);
    let loginHide = document.getElementById("login"); /* appel l'input qui va etre remplacer */
    showlogin.textContent = login; /* affiche la valeur qu'il y a dans input pour le remplacer */
    if (loginOk.includes(login)) { /* verifie si la valeur de input est correcte */
        loginActive.style.display = 'list-item'; /* afficher si le login est bon */

        let textanim = document.querySelectorAll(".textanim");
        let positionP2 = 0;
        let speedP2 = 50;

        function textshow(){
            if (positionP2 < textanim.length) {
                textanim[positionP2].style.display ="block";
                positionP2++;
                setTimeout(textshow, speedP2);
                scrollToBottom()
            }
        }
        setTimeout(textshow, 10);
        loginHide.style.display= 'none'; /* cache input */

        function web(){ /* afficher le site qui correspond a l'eleve web2 */
            let daniel = document.getElementById("daniel"); /* recupère la balise ou il y a le site */
            let geraldine = document.getElementById("geraldine");
            let jm = document.getElementById("jm");
            let jeremy = document.getElementById("jeremy");
            let mykyta = document.getElementById("mykyta");
            let reda = document.getElementById("reda");
            let said = document.getElementById("said");
            let samuel = document.getElementById("samuel");
            let sola = document.getElementById("sola");
            let prefo = document.getElementById("prefo");

            if (login == "daniel") {
                daniel.style.display ="table-cell"; /* changer le css si le input correspond a l'eleve */
                document.querySelector(".texticon").textContent =" Daniel ";
            }else if(login == "geraldine" || login == "géraldine") {
                geraldine.style.display ="table-cell";
                document.querySelector(".texticon").textContent =" Géraldine ";
            }else if(login == "jm" || login =="jean-michael") {
                jm.style.display ="table-cell";
                document.querySelector(".texticon").textContent =" JM ";
            }else if(login == "jeremy") {
                jeremy.style.display ="table-cell";
                document.querySelector(".texticon").textContent =" Jeremy ";
            }else if(login == "mykyta") {
                mykyta.style.display ="table-cell";
                document.querySelector(".texticon").textContent =" Mykyta ";
            }else if(login == "reda") {
                reda.style.display ="table-cell";
                document.querySelector(".texticon").textContent =" Reda ";
            }else if(login == "said" || login == "saïd") {
                said.style.display ="table-cell";
                document.querySelector(".texticon").textContent =" Said ";
            }else if(login == "samuel") {
                samuel.style.display ="table-cell";
                document.querySelector(".texticon").textContent =" Samuel ";
            }else if(login == "sola") {
                sola.style.display ="table-cell";
                document.querySelector(".texticon").textContent =" Sola ";
            }else if(login == "prefo"){
                prefo.style.display ="table-cell";
                document.querySelector(".texticon").textContent =" web1 et web2 ";
            }else{
                daniel.style.display ="table-cell";
                document.querySelector(".texticon").textContent =" Daniel ";
            }

        }
        web();


    }else {
        loginNotActive.style.display= 'list-item'; /* afficher si le login n'est pas bon */
        loginHide.style.display= 'none'; /* cache input */
    }
}




document.addEventListener("DOMContentLoaded", /* attends que toute la page soit chargé pour appliquer la fonction */
    function () {

        let write = "init Terminal-prefo Daniel"; /* texte a afficher */
        let speed = 60; /* durée de l'animation */
        let position = 0; /* ou commencer l'animation par rapport au texte*/

        function writeshow() { /* affiche le texte une lettre apres l'autre */
            if (position < write.length) {
                document.querySelector(".write").innerHTML += write.charAt(position);
                position++;
                setTimeout(writeshow, speed);
            }
        }
        setTimeout(writeshow, 10);

        let write2 = "Please enter your login credentials:"; /* texte a afficher */
        let position2 = 0; /* ou commencer l'animation par rapport au texte*/
        function writeshow2() { /* affiche le texte une lettre apres l'autre */
            if (position2 < write2.length) {
                document.querySelector(".write2").innerHTML += write2.charAt(position2);
                position2++;
                setTimeout(writeshow2, speed);
            }
        }
        setTimeout(writeshow2, 2500); /* annimation du texte write2 lettre par lettre */

        let panim = document.querySelectorAll(".panim");
        let positionP = 0;
        let speedP = 80;

        function pshow(){
            if (positionP < panim.length) {
                panim[positionP].style.display ="block";
                positionP++;
                setTimeout(pshow, speedP);
            }
        }
        setTimeout(pshow, 2000); /*affiche le texte paragraphe par paragraphe*/

        let textanim = document.querySelectorAll(".textanim");
        let positionP2 = 0;
        let speedP2 = 100;

        function textshow(){
            if (positionP2 < textanim.length) {
                textanim[positionP2].style.display ="block";
                positionP2++;
                setTimeout(textshow, speedP2); /*affiche le texte de chargement ligne par ligne */
            }
        }


        setTimeout(function(){document.getElementById("login").focus();},4500); /*met le curser dans input apres qu'il s'affiche*/
    }
);
