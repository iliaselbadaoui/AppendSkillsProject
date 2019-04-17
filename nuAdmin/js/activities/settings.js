'use strict';
let xhr = new XMLHttpRequest(),
    response,
    nom = document.getElementById("nom"),
    prenom = document.getElementById("prenom"),
    pays = document.getElementById("pays"),
    ville = document.getElementById("ville"),
    adresse = document.getElementById("adresse"),
    tel = document.getElementById("tel"),
    email = document.getElementById("email");
xhr.open("POST","../../controllers/UserSessionData.php",false);
xhr.send();
if(xhr.status==200){
    response = xhr.response;
    if(response!=null){
        let res = JSON.parse(response);
        nom.textContent=res.nom;
        prenom.textContent=res.prenom;
        pays.textContent=res.pays;
        ville.textContent=res.ville;
        adresse.textContent=res.adresse;
        tel.textContent=res.adresse;
        email.textContent=res.email;
    }
}

let changePasse = document.getElementById("changerPasse"),
    modifyProfil = document.getElementById("modifierProfil");

modifyProfil.addEventListener("click",function () {
    let container = document.createElement("div"),
        modal = document.createElement("div"),
        title = document.createElement("H2"),
        Nnom = document.createElement("input"),
        Nprenom = document.createElement("input"),
        Npays = document.createElement("input"),
        Nville = document.createElement("input"),
        Nadress = document.createElement("input"),
        Ntel = document.createElement("input"),
        valider = document.createElement("button");
    container.className="ModalContainer";
    container.id="container";
    modal.className="modal";
    modal.id="modal";
    title.className="modalTitle";
    title.textContent="Modifier profil";
    Nnom.className="inputBlock";
    Nnom.id="nom";
    Nnom.placeholder="Nom";
    Nnom.type="text";
    Nprenom.className="inputBlock";
    Nprenom.id="prenom";
    Nprenom.placeholder="Prénom";
    Nprenom.type="text";
    Npays.className="inputBlock";
    Npays.id="noù";
    Npays.placeholder="Pays";
    Npays.type="text";
    Nville.className="inputBlock";
    Nville.id="ville";
    Nville.placeholder="Ville";
    Nville.type="text";
    Nadress.className="inputBlock";
    Nadress.id="adresse";
    Nadress.placeholder="Adresse";
    Nadress.type="text";
    Ntel.className="inputBlock";
    Ntel.id="tel";
    Ntel.placeholder="Téléphone";
    Ntel.type="text";
    valider.textContent="Valider";
    valider.className="Positive_BTN hc-item";
    valider.id="valider";
    valider.onclick=function(){/*Hna validation*/};
    let res = JSON.parse(response);
    Nnom.value = res.nom;
    Nprenom.value = res.prenom;
    Npays.value = res.pays;
    Nville.value = res.ville;
    Nadress.value = res.adresse;
    Ntel.value = res.tel;
    container.appendChild(modal);
    modal.appendChild(title);
    modal.appendChild(Nnom);
    modal.appendChild(Nprenom);
    modal.appendChild(Npays);
    modal.appendChild(Nville);
    modal.appendChild(Nadress);
    modal.appendChild(Ntel);
    modal.appendChild(valider);
    document.body.appendChild(container);
});
function valider(int) {

};
changePasse.addEventListener("click",function () {
   let container = document.createElement("div"),
       modal = document.createElement("div"),
       title = document.createElement("H2"),
       newPass = document.createElement("input"),
       confirmPass = document.createElement("input"),
       valider = document.createElement("button");
    container.className="ModalContainer";
    container.id="container";
    modal.className="modal";
    modal.id="modal";
    title.className="modalTitle";
    title.textContent="Modifier Mot de passe";
    newPass.className="inputBlock";
    newPass.id="newPass";
    newPass.placeholder="Nouveau mot de passe";
    newPass.type="password";
    confirmPass.className="inputBlock";
    confirmPass.id="confirmPass";
    confirmPass.placeholder="Confirmation de mot de passe";
    confirmPass.type="password";
    valider.textContent="Valider";
    valider.className="Positive_BTN hc-item";
    valider.id="valider";
    valider.onclick=function(){
        let passFormat = new RegExp("^[A-Za-z0-9&@#$]*[A-Z]{1}[A-Za-z0-9&@#$]*[&@#$]{1}[A-Za-z0-9]*$");
        if(newPass.value.toString().length>=8){
            if(passFormat.test(newPass.value)){
                if(newPass.value===confirmPass.value){
                    let formData = new FormData(),
                        xhr = new XMLHttpRequest();

                    formData.append("passe",newPass.value);
                    formData.append("op","updatePasse");
                    xhr.open("POST","../../controllers/UserController.php",false);
                    xhr.send(formData);
                    if(xhr.status==200){
                        let res = xhr.response;
                        console.log(res)
                    }
                }else {
                    alert("Les deux champs ne contient pas le même mot de passe");
                }
            }else {
                alert("Le mot de passe doit avoir une lettre majiscule au moin et un symbole.")
            }
        }else {
            alert("Le mot de passe doit doit contenir au moin 8 caractère");
        }
    };
    container.appendChild(modal);
    modal.appendChild(title);
    modal.appendChild(newPass);
    modal.appendChild(confirmPass);
    modal.appendChild(valider);
    document.body.appendChild(container);
});