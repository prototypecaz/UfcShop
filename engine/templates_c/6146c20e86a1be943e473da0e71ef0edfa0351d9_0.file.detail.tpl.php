<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-26 22:21:27
  from '/var/www/html/ufcshop/engine/templates/front-office/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f973dd78c8d46_14361955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6146c20e86a1be943e473da0e71ef0edfa0351d9' => 
    array (
      0 => '/var/www/html/ufcshop/engine/templates/front-office/detail.tpl',
      1 => 1603747244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f973dd78c8d46_14361955 (Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="container-fluid mt-3 ">

<div>



<article class="row align-items-center mt-5">
<img src="./uploads/<?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['image'];?>
" class="w-25 mx-auto d-block col-3 offset-2">
<div class="col-5 mr-5 border-left border-secondary">
<h2 class="text-center font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['titre'];?>
</h2>

<p class="text-center font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['description'];?>
</p>
<p class="text-center text-primary font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['produits']->value[0]['prix'];?>
&euro;</p>
<button href="" class="btn btncommander btn-primary font-weight-bold text-white text-center mt-5  d-block">Ajouter au panier</button>
</div>
</article>


</div>
</section><?php }
}
