<?php
/* Smarty version 3.1.34-dev-7, created on 2023-09-06 17:21:14
  from '/var/www/html/ufcshop/engine/templates/front-office/main2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_64f898eabde507_29843113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5de5531220e00a12ba35e123e50ef95a6e44579' => 
    array (
      0 => '/var/www/html/ufcshop/engine/templates/front-office/main2.tpl',
      1 => 1603747124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f898eabde507_29843113 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container">
    <section>

    

        <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value === '';
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>
        
        <section>
        <h3 class="mt-4 font-weight-bold">Nouveaux équipements arriver dans notre boutique</h3>
            <?php
$_smarty_tpl->tpl_vars['iterator'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['iterator']->step = 1;$_smarty_tpl->tpl_vars['iterator']->total = (int) ceil(($_smarty_tpl->tpl_vars['iterator']->step > 0 ? 1+1 - (0) : 0-(1)+1)/abs($_smarty_tpl->tpl_vars['iterator']->step));
if ($_smarty_tpl->tpl_vars['iterator']->total > 0) {
for ($_smarty_tpl->tpl_vars['iterator']->value = 0, $_smarty_tpl->tpl_vars['iterator']->iteration = 1;$_smarty_tpl->tpl_vars['iterator']->iteration <= $_smarty_tpl->tpl_vars['iterator']->total;$_smarty_tpl->tpl_vars['iterator']->value += $_smarty_tpl->tpl_vars['iterator']->step, $_smarty_tpl->tpl_vars['iterator']->iteration++) {
$_smarty_tpl->tpl_vars['iterator']->first = $_smarty_tpl->tpl_vars['iterator']->iteration === 1;$_smarty_tpl->tpl_vars['iterator']->last = $_smarty_tpl->tpl_vars['iterator']->iteration === $_smarty_tpl->tpl_vars['iterator']->total;?>
            <article class="row mx-auto mt-4 align-items-center produits p-3 ">
            
            <img class="col-4 order-1 " src="./uploads/<?php echo $_smarty_tpl->tpl_vars['produits']->value[$_smarty_tpl->tpl_vars['iterator']->value]['image'];?>
">
            
            <div class="col-8 ">
            <h5 class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['produits']->value[$_smarty_tpl->tpl_vars['iterator']->value]['titre'];?>
</h5>
            <p><?php echo $_smarty_tpl->tpl_vars['produits']->value[$_smarty_tpl->tpl_vars['iterator']->value]['description'];?>
</p>
            <a href="./?article=<?php echo $_smarty_tpl->tpl_vars['produits']->value[$_smarty_tpl->tpl_vars['iterator']->value]['id'];?>
" class="btn border font-weight-bold boutton text-white">Voir produit</a>
            </div>

            

            </article>
            <?php }
}
?>
            
        </section>

        <?php } elseif (strstr($_smarty_tpl->tpl_vars['page']->value,"article")) {?>

        <section class="bg-white mt-4 rounded p-2">

        <h2 class="text-center font-weight-bold "><?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['titre'];?>
</h2>

        <img class="imgArticle d-block mx-auto my-3 " src="./uploads/<?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['image'];?>
">



        <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['description'];?>
</p>
        <p>Prix: <?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['prix'];?>
&euro;</p>
        <p>Marque:<?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['marque'];?>
</p>
        <a class="btn test5 text-white font-weight-bold">Ajouter au panier</a>
        </section>

        <?php } elseif ($_smarty_tpl->tpl_vars['page']->value === "administration") {?>
        

         <form method="POST" action="./administration/login.php">
            <div class="row">
                <input class="col-2 offset-5 my-3" type="text" name="username" maxlength="25" placeholder="admin" required />

                <input class="col-2 offset-5 my-3" type="password" name="password" autocomplete="off" minlength="8" placeholder="*************" required />

                <button class="col-2 offset-5 my-3" type="submit">Connexion</button>

            </div>
        </form>
       

        <?php }?>
        
    

</section>

</main>

</section><?php }
}
