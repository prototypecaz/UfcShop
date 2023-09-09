


<section class="col-6 fond  position-relative">




<header class="d-flex align-items-center ">
    <img class="logo mt-2" src="{$liens.icon}">
    

    
    <nav class="nav mx-auto  ">
        {foreach $liens.links as $link}
        <i> </i>
            <a class="nav-link nav-item text-white font-weight-bold ml-5" href="{$link.href}" title="{$link.title}">{$link.text}</a>
        {/foreach}
    </nav>
    
</header>
