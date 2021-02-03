/*
_________________________________________________________________________________________________________________________

-------------------------------------------------------------------------------------------------------------------------
Il faut créer au préalable un élément de type <img id="imgPreview"> dans votre code html.
Celui-ci vous permettra d'afficher l'aperçu de l'image.
Vous allez pouvoir modifier les dimensions de l'aperçu via un css respectif : "uploadPreview.css" fourni dans le dossier.

Il faut également que votre input soit de cette forme :
<input type="file" name="fileToUpload" id="fileToUpload">
-------------------------------------------------------------------------------------------------------------------------
_________________________________________________________________________________________________________________________
*/

let uploadFile = document.getElementById("uploadFile");
let firstCol = document.getElementById("firstCol");
let alreadyCreated = false;

uploadFile.addEventListener("change", function() {
    if (!alreadyCreated) {
        let previewDiv = document.createElement("div");
            previewDiv.className = "mb-3";
            previewDiv.id = "uploadImg";
            previewDiv.style.height = "100%";
            previewDiv.style.width = "100%";
            firstCol.prepend(previewDiv);
        let previewImg = document.createElement("img");
            previewImg.id = "imgPreview";
            previewImg.className = "w-100";
            previewDiv.appendChild(previewImg);
            alreadyCreated = true;
    }
    let oFReader = new FileReader(); // on créé un nouvel objet FileReader
        oFReader.readAsDataURL(this.files[0]);
        oFReader.onload = function (oFREvent) {
            imgPreview.setAttribute('src', oFREvent.target.result);
        };

});