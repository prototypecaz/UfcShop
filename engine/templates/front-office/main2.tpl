<main class="container">
    <section>

    

        {if {$page === ""}}
        
        <section>
        <h3 class="mt-4 font-weight-bold">Nouveaux équipements arriver dans notre boutique</h3>
            {for $iterator=0 to 1}
            <article class="row mx-auto mt-4 align-items-center produits p-3 ">
            
            <img class="col-4 order-1 " src="./uploads/{$produits[$iterator]['image']}">
            
            <div class="col-8 ">
            <h5 class="font-weight-bold">{$produits[$iterator]['titre']}</h5>
            <p>{$produits[$iterator]['description']}</p>
            <a href="./?article={$produits[$iterator]['id']}" class="btn border font-weight-bold boutton text-white">Voir produit</a>
            </div>

            

            </article>
            {/for}
            
        </section>

        {elseif $page|strstr:"article"}

        <section class="bg-white mt-4 rounded p-2">

        <h2 class="text-center font-weight-bold ">{$produits[0]['titre']}</h2>

        <img class="imgArticle d-block mx-auto my-3 " src="./uploads/{$produits[0]['image']}">



        <p class="text-center">{$produits[0]['description']}</p>
        <p>Prix: {$produits[0]['prix']}&euro;</p>
        <p>Marque:{$produits[0]['marque']}</p>
        <a class="btn test5 text-white font-weight-bold">Ajouter au panier</a>
        </section>

        {elseif $page === "administration"}
        

         <form method="POST" action="./administration/login.php">
            <div class="row">
                <input class="col-2 offset-5 my-3" type="text" name="username" maxlength="25" placeholder="admin" required />

                <input class="col-2 offset-5 my-3" type="password" name="password" autocomplete="off" minlength="8" placeholder="*************" required />

                <button class="col-2 offset-5 my-3" type="submit">Connexion</button>

            </div>
        </form>
       

        {/if}
        
    

</section>

</main>

</section>