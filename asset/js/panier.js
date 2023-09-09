var boutton = document.querySelectorAll('#btnPanier');


boutton.forEach(function(element){
    element.onclick = function(){
        
            if(!localStorage.getItem('panier')){

             localStorage.setItem('panier',this.value);
             

            }else{
                var old = localStorage.getItem('panier');
          
                localStorage.setItem('panier',old+","+this.value);
            }


    
       
        
    }
});
if(document.location.href.includes("panier")){
    var divTest = document.querySelector("#test99");
    console.log(divTest)
    fetch("./index.php?id="+JSON.stringify({products: localStorage.getItem('panier').split(",")}))
    .then(function(response){ 
        response.json().then( 
            function(json){
                
                
                json.forEach(element => {
                    console.log(element)
                    let titreProduit = document.createElement("h2");
                    titreProduit.textContent= element[0].titre;
                    divTest.appendChild(titreProduit);
                });
            })
        })
    }