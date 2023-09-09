 
 
 <main class="">
{if $page === "produit"}
 <section class="">

<div class="position-relative">

<img src="./asset/img/formule.jpg" class="president mt-2 w-100">

<div class="position-absolute slogan2 text-white font-weight-bold">
<h1 class="alaune text-center">A la une !</h1>
<p> Vous allez adorer UFC Shop... <br> Découvrez nos nouveautés de la saison <br>et la collection Metal Boxe.</p>

</div>

</div>

</section>


<section class="container mt-5">

<h2 class="text-center mb-5 font-weight-bold titreCat">Categories</h2>

<div class="row justify-content-center  divcate">


{foreach $categories as $categorie}

<div id="lien" class=" p-5 text-center position-relative  categorie ">

<h3 class="font-weight-bold text-white text-uppercase">{$categorie['categorie']}</h3>
<a href="./?categorie={$categorie.id}" class="btn btnViewAll font-weight-bold ">View All</a>
<div id="arrondi" class=" position-absolute"></div>
</div>


{/foreach}


</div>

</section>


<section class="sectionMarque">



<div class="border border-dark marques row align-items-center justify-content-around ">

{foreach $marques as $marque}
<a href="./?marques={$marque.id}"><img class="autreimg" src="./uploads/{$marque['autreimg']}"></a>
{/foreach}
</div>


</section>



 <section class=" mt-5  container-fluid position-relative">


                <h2 class="text-center font-weight-bold">Produits Les Plus Vendus</h2>
        <div class="row justify-content-center">
        {foreach $produitVendus as $products}
        <article class="mt-5 col-3 mx-3">
        <div class="shadow-lg p-1">
        <h2 class="text-center font-weight-bold ">{$products['marque']}</h2>

        <img class="imgArticle d-block mx-auto my-3 w-50 " src="./uploads/{$products['image']}">
        <img class="position-absolute ruban" src="./asset/img/ruban.png">
        </div>
        <p class="text-center font-weight-bold mt-2">{$products['titre']}</p>
        <p class="text-center">{$products['description']}</p>
        <p class="text-center font-weight-bold prixVendu"> {$products['prix']}&euro;</p>
        
        <a href="./?vendu={$products['id']}/#vendu" class="btn btnvendu text-white font-weight-bold mx-auto d-block ">Voir produit</a>
        </article>
        {/foreach}
       </div>
</section>



<section class="sectionEnvoie container-fluid">

<img class="boxing mx-auto d-block" src="./asset/img/boxing.png">

<div class="envoie text-white row align-items-center justify-content-center">

<div class="col-5">
<h2 class="test888 font-weight-bold">Recevoir les nouveautés</h2>
<p class="">Pour etre au courant toutes les nouveautés sur notre site, envoyez nous votre adresse e-mail.</p>
</div>

<div class="col-5 formEnvoie ">
<form>
<input class="inputRound font-weight-bold text-center text-white" placeholder="Votre adresse e-mail">
<button class="btnRound font-weight-bold">Envoyer</button>
</form>
</div>

</div>

</section>





{elseif $page|strstr:"marques" || $page|strstr:"categorie"  }



 {include file="produit.tpl"}

{elseif $page|strstr:"vendu"}


{include file="detail.tpl"}


{/if}



</main>