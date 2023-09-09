<?php
/* Smarty version 3.1.34-dev-7, created on 2023-09-06 17:21:01
  from '/var/www/html/ufcshop/engine/templates/front-office/headerProduit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_64f898dd693c29_99705607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3ea2943d8cb4c9dfdeb9a64fdf907a54a67fde' => 
    array (
      0 => '/var/www/html/ufcshop/engine/templates/front-office/headerProduit.tpl',
      1 => 1602444486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f898dd693c29_99705607 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="backheadprod  ">

<div class="d-flex align-items-center justify-content-around">

    <img class="logo mt-4" src="./asset/img/logo.png">
    
   <div class="d-flex w-50 ml-3 mt-4">
    <input class="rounded w-100" type="text" placeholder="Rechercher" id="recherche">
    <button class="buttonrecherche1 ml-1 "><i class=" fa fa-search recherche"></i></button>
   </div> 

</div>

<nav class="nav justify-content-end mt-2 navprod">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liens']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
        
            <a class="nav-link nav-item text-white font-weight-bold ml-4" href="<?php echo $_smarty_tpl->tpl_vars['link']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['text'];?>
</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</nav>

</header>
<?php }
}
