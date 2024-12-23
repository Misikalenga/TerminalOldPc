
function scrollToBottom() {
    window.scrollTo(0, document.body.scrollHeight);
}

function loginsubmit(event){
    event.preventDefault();
    let loginActive= document.querySelector(".active"); /* appel le texte a afficher si le login est bon */
    let loginNotActive= document.querySelector(".notactive"); /* appel le texte a afficher si le login n'est pas bon */
    let showlogin= document.querySelector(".showlogin"); /* appel la balise qui va remplacer l'input */
    let login = document.getElementById("login").value;  /* enregistre dans une variable ce qu'il y a dans input */
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

        function web(){ /* afficher le site qui correspond a l'eleve */
            let daniel = document.getElementById("daniel");
            let geraldine = document.getElementById("geraldine");
            let jm = document.getElementById("jm");
            let jeremy = document.getElementById("jeremy");
            let mykyta = document.getElementById("mykyta");
            let reda = document.getElementById("reda");
            let said = document.getElementById("said");
            let samuel = document.getElementById("samuel");
            let sola = document.getElementById("sola");

            if (login == "daniel") {
                daniel.style.display ="table-cell";
            }else if(login == "geraldine") {
                geraldine.style.display ="table-cell";
            }else if(login == "jm") {
                jm.style.display ="table-cell";
            }else if(login == "jeremy") {
                jeremy.style.display ="table-cell";
            }else if(login == "mykyta") {
                mykyta.style.display ="table-cell";
            }else if(login == "reda") {
                reda.style.display ="table-cell";
            }else if(login == "said") {
                said.style.display ="table-cell";
            }else if(login == "samuel") {
                samuel.style.display ="table-cell";
            }else if(login == "sola") {
                sola.style.display ="table-cell";
            }else{
                daniel.style.display ="table-cell";
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

        let write = "init Larevel-Demo"; /* texte a afficher */
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
        setTimeout(writeshow2, 2500);

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
        setTimeout(pshow, 2000);

        let textanim = document.querySelectorAll(".textanim");
        let positionP2 = 0;
        let speedP2 = 100;

        function textshow(){
            if (positionP2 < textanim.length) {
                textanim[positionP2].style.display ="block";
                positionP2++;
                setTimeout(textshow, speedP2);
            }
        }
        setTimeout(textshow, 10000);

        setTimeout(function(){document.getElementById("login").focus();},4500);
    }
);
