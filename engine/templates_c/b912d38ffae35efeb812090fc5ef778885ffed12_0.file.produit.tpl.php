<?php
/* Smarty version 3.1.34-dev-7, created on 2023-09-06 17:21:01
  from '/var/www/html/ufcshop/engine/templates/front-office/produit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_64f898dd69f7d4_86372239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b912d38ffae35efeb812090fc5ef778885ffed12' => 
    array (
      0 => '/var/www/html/ufcshop/engine/templates/front-office/produit.tpl',
      1 => 1603746568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f898dd69f7d4_86372239 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--<section class="container-fluid mt-5">

<div class="row">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
$_smarty_tpl->tpl_vars['produit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->do_else = false;
?>

<article class="col-3 ml-4 shadow-lg">
<h2 class="text-center font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['produit']->value['titre'];?>
</h2>
<img src="<?php echo $_smarty_tpl->tpl_vars['produit']->value['image'];?>
" class="w-50 mx-auto d-block">
<p class="text-center font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['produit']->value['description'];?>
</p>
<p class="text-center prixVendu font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['produit']->value['prix'];?>
&euro;</p>
<a href="./?vendu=<?php echo $_smarty_tpl->tpl_vars['produit']->value['id'];?>
#vendu" class="btn btnvendu font-weight-bold text-white text-center d-block">Voir produit</a>
</article>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</section>-->

<section class="container-fluid mt-5">

<div class="row">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
$_smarty_tpl->tpl_vars['produit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->do_else = false;
?>

<article class="col-3 ml-4 shadow-lg">
<h2 class="text-center font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['produit']->value['titre'];?>
</h2>
<img src="./uploads/<?php echo $_smarty_tpl->tpl_vars['produit']->value['image'];?>
" class="w-50 mx-auto d-block">
<p class="text-center font-weight-bold mt-3"><?php echo $_smarty_tpl->tpl_vars['produit']->value['description'];?>
</p>
<p class="text-center prixVendu font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['produit']->value['prix'];?>
&euro;</p>
<button  type="button" class="btn btnvendu font-weight-bold text-white text-center mx-auto d-block" id="<?php echo $_smarty_tpl->tpl_vars['produit']->value['id'];?>
">Voir produit</button>

</article>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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


</section><?php }
}
