
var buttonModif = document.querySelector("#modifArticle");
var change = document.querySelector('#changer');
var select = document.querySelector('#deleteArticle');
var titre = document.querySelector('#titre');
var description = document.querySelector('#description');
var selectCategorie = document.querySelector('#selectCategorie');
var selectMarque = document.querySelector('#selectMarque');
var prix = document.querySelector('#prix');
var quantite = document.querySelector('#quantite');
var div = document.querySelector('#imgAsupprimer');
var img = document.querySelector('#addImg');
var btn = document.querySelector('#launchDelete');
var hiddDiv = document.querySelector('#hiddDiv');
var vendu = document.querySelector('#vendu');

buttonModif.onclick = function (){
    div.className="d-none";
    hiddDiv.className="d-block";
    change.action="./modifArticle.php?id="+select.value;
    
    var NOM_IMG;
    fetch("./readArticle.php?id="+select.value)
    .then(function(response) { 
        response.json().then( 
            function(reponse) {
                console.log(reponse);
              reponse.forEach(element => {
                  titre.value=element.titre;
                  description.value=element.description;
                  prix.value=element.prix;
                  quantite.value=element.quantite;
                  selectCategorie.value=element.id_categorie;
                  selectMarque.value=element.id_marque;
                  img.src="../uploads/"+element.image;
                  NOM_IMG = element.image;
                  vendu.value = element.vendu
                  
                  
              }); 
               
              
            })

        })

        btn.onclick = function (){
            
            fetch("./supprimeImg.php?image="+NOM_IMG)
            .then(function(response) { 
                response.json().then( 
                    function(json) {
                        if(json[0].operation){
            div.className="d-block";
            hiddDiv.remove();
                        }

                    })})

        }

        

    }
   