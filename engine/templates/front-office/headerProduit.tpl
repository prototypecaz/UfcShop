
<header class="backheadprod  ">

<div class="d-flex align-items-center justify-content-around">

    <img class="logo mt-4" src="./asset/img/logo.png">
    
   <div class="d-flex w-50 ml-3 mt-4">
    <input class="rounded w-100" type="text" placeholder="Rechercher" id="recherche">
    <button class="buttonrecherche1 ml-1 "><i class=" fa fa-search recherche"></i></button>
   </div> 

</div>

<nav class="nav justify-content-end mt-2 navprod">
        {foreach $liens.links as $link}
        
            <a class="nav-link nav-item text-white font-weight-bold ml-4" href="{$link.href}" title="{$link.title}">{$link.text}</a>
        {/foreach}
</nav>

</header>
