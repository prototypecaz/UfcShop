var boutton = document.querySelectorAll(".btnvendu")
var header = document.querySelector("#modalId")
var image = document.querySelector("#imgId")
var description = document.querySelector("#modalP")
var marque = document.querySelector("#modalMarque");
var prix = document.querySelector("#modalPrix");

boutton.forEach(element => {
    $(document).ready(function(){
        $(element).click(function(){
          $("#myModal").modal();
        });
      });
      
      element.onclick = function(){
        
        fetch('./modal.php?modal='+this.id)
        .then(function(response) {
            response.json().then( // Renvoie un tableau associatif manipulable par javascript (format json)
                function(modal) {
                   console.log(modal)
                 header.textContent=modal[0].titre
                 image.src="./uploads/"+modal[0].image
                 description.textContent=modal[0].description
                 marque.textContent="Marque: "+modal[0].marque
                  prix.innerHTML=modal[0].prix+'&#8364;'
                       
                    });
        
                }
            )
    }
    
});











