


<body  class="">

{if {$page === "" || $page|strstr:"panier" || $page|strstr:"article" || $page|strstr:"admin" }}
<section class="container-fluid">
    <section id="multiscroll" class="row">

        {include file="header.tpl"}

        {include file="main.tpl"}

         {include file="footer.tpl"}

        {include file="header2.tpl"}

        {include file="main2.tpl"}

        
    </section>
</section>

    {elseif $page|strstr:"produit" || $page|strstr:"categorie" || $page|strstr:"marque" || $page|strstr:"vendu"  }
<section class="sectionProd">
    {include file="headerProduit.tpl"}

        {include file="mainProduit.tpl"}

         {include file="footerProduit.tpl"}
</section>
{/if}


<script type="text/javascript" src="./asset/js/modal.js"></script>
<script type="text/javascript" src="./asset/js/footer.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>