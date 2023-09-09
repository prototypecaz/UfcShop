<?php
/* Smarty version 3.1.34-dev-7, created on 2023-09-06 17:21:01
  from '/var/www/html/ufcshop/engine/templates/front-office/mainProduit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_64f898dd699693_69634729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f610a05469cdee75c4a360cb3e8bdae09bcbfce' => 
    array (
      0 => '/var/www/html/ufcshop/engine/templates/front-office/mainProduit.tpl',
      1 => 1603747314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:produit.tpl' => 1,
    'file:detail.tpl' => 1,
  ),
),false)) {
function content_64f898dd699693_69634729 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 
 <main class="">
<?php if ($_smarty_tpl->tpl_vars['page']->value === "produit") {?>
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


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>

<div id="lien" class=" p-5 text-center position-relative  categorie ">

<h3 class="font-weight-bold text-white text-uppercase"><?php echo $_smarty_tpl->tpl_vars['categorie']->value['categorie'];?>
</h3>
<a href="./?categorie=<?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
" class="btn btnViewAll font-weight-bold ">View All</a>
<div id="arrondi" class=" position-absolute"></div>
</div>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</div>

</section>


<section class="sectionMarque">



<div class="border border-dark marques row align-items-center justify-content-around ">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marques']->value, 'marque');
$_smarty_tpl->tpl_vars['marque']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marque']->value) {
$_smarty_tpl->tpl_vars['marque']->do_else = false;
?>
<a href="./?marques=<?php echo $_smarty_tpl->tpl_vars['marque']->value['id'];?>
"><img class="autreimg" src="./uploads/<?php echo $_smarty_tpl->tpl_vars['marque']->value['autreimg'];?>
"></a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


</section>



 <section class=" mt-5  container-fluid position-relative">


                <h2 class="text-center font-weight-bold">Produits Les Plus Vendus</h2>
        <div class="row justify-content-center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produitVendus']->value, 'products');
$_smarty_tpl->tpl_vars['products']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->do_else = false;
?>
        <article class="mt-5 col-3 mx-3">
        <div class="shadow-lg p-1">
        <h2 class="text-center font-weight-bold "><?php echo $_smarty_tpl->tpl_vars['products']->value['marque'];?>
</h2>

        <img class="imgArticle d-block mx-auto my-3 w-50 " src="./uploads/<?php echo $_smarty_tpl->tpl_vars['products']->value['image'];?>
">
        <img class="position-absolute ruban" src="./asset/img/ruban.png">
        </div>
        <p class="text-center font-weight-bold mt-2"><?php echo $_smarty_tpl->tpl_vars['products']->value['titre'];?>
</p>
        <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['products']->value['description'];?>
</p>
        <p class="text-center font-weight-bold prixVendu"> <?php echo $_smarty_tpl->tpl_vars['products']->value['prix'];?>
&euro;</p>
        
        <a href="./?vendu=<?php echo $_smarty_tpl->tpl_vars['products']->value['id'];?>
/#vendu" class="btn btnvendu text-white font-weight-bold mx-auto d-block ">Voir produit</a>
        </article>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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





<?php } elseif (strstr($_smarty_tpl->tpl_vars['page']->value,"marques") || strstr($_smarty_tpl->tpl_vars['page']->value,"categorie")) {?>



 <?php $_smarty_tpl->_subTemplateRender("file:produit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif (strstr($_smarty_tpl->tpl_vars['page']->value,"vendu")) {?>


<?php $_smarty_tpl->_subTemplateRender("file:detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }?>



</main><?php }
}
