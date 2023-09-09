
<!--<section class="container-fluid mt-5">

<div class="row">

{foreach $produits as $produit}

<article class="col-3 ml-4 shadow-lg">
<h2 class="text-center font-weight-bold">{$produit['titre']}</h2>
<img src="{$produit['image']}" class="w-50 mx-auto d-block">
<p class="text-center font-weight-bold">{$produit['description']}</p>
<p class="text-center prixVendu font-weight-bold">{$produit['prix']}&euro;</p>
<a href="./?vendu={$produit['id']}#vendu" class="btn btnvendu font-weight-bold text-white text-center d-block">Voir produit</a>
</article>

{/foreach}
</div>
</section>-->

<section class="container-fluid mt-5">

<div class="row">

{foreach $produits as $produit}

<article class="col-3 ml-4 shadow-lg">
<h2 class="text-center font-weight-bold">{$produit['titre']}</h2>
<img src="./uploads/{$produit['image']}" class="w-50 mx-auto d-block">
<p class="text-center font-weight-bold mt-3">{$produit['description']}</p>
<p class="text-center prixVendu font-weight-bold">{$produit['prix']}&euro;</p>
<button  type="button" class="btn btnvendu font-weight-bold text-white text-center mx-auto d-block" id="{$produit['id']}">Voir produit</button>

</article>

{/foreach}
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content ">
        <div class="modal-header mx-auto">
          
          <h4 id="modalId" class="modal-title font-weight-bold"></h4>
        </div>
        <div class="modal-body row font-weight-bold">
            <img id="imgId" class="w-50 col-4 offset-1" src=""> 
            <div class="col-5 offset-1">
          <p id="modalP"></p>
          <p id="modalMarque"></p>
          <p id="modalPrix"></p>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-default btn-primary font-weight-bold btncommander" data-dismiss="modal">Ajouter au panier</button>
          <button type="button" class="btn btn-default btn-primary font-weight-bold" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


</section>