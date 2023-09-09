<?php
/* Smarty version 3.1.34-dev-7, created on 2023-09-06 17:21:14
  from '/var/www/html/ufcshop/engine/templates/front-office/body.slave.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_64f898eabccb60_52159945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b39cff4b4307e957bf2d7b7799f3840df0ede5d1' => 
    array (
      0 => '/var/www/html/ufcshop/engine/templates/front-office/body.slave.tpl',
      1 => 1603308608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:main.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:header2.tpl' => 1,
    'file:main2.tpl' => 1,
    'file:headerProduit.tpl' => 1,
    'file:mainProduit.tpl' => 1,
    'file:footerProduit.tpl' => 1,
  ),
),false)) {
function content_64f898eabccb60_52159945 (Smarty_Internal_Template $_smarty_tpl) {
?>


<body  class="">

<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value === '' || strstr($_smarty_tpl->tpl_vars['page']->value,"panier") || strstr($_smarty_tpl->tpl_vars['page']->value,"article") || strstr($_smarty_tpl->tpl_vars['page']->value,"admin");
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
<section class="container-fluid">
    <section id="multiscroll" class="row">

        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

         <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:main2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
    </section>
</section>

    <?php } elseif (strstr($_smarty_tpl->tpl_vars['page']->value,"produit") || strstr($_smarty_tpl->tpl_vars['page']->value,"categorie") || strstr($_smarty_tpl->tpl_vars['page']->value,"marque") || strstr($_smarty_tpl->tpl_vars['page']->value,"vendu")) {?>
<section class="sectionProd">
    <?php $_smarty_tpl->_subTemplateRender("file:headerProduit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:mainProduit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

         <?php $_smarty_tpl->_subTemplateRender("file:footerProduit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</section>
<?php }?>


<?php echo '<script'; ?>
 type="text/javascript" src="./asset/js/modal.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./asset/js/footer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
