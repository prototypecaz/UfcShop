<?php
/* Smarty version 3.1.34-dev-7, created on 2023-09-06 17:21:14
  from '/var/www/html/ufcshop/engine/templates/front-office/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_64f898eabd2005_89913632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e5651c834fa809a1b1e2218011e8372e99bc6b8' => 
    array (
      0 => '/var/www/html/ufcshop/engine/templates/front-office/header.tpl',
      1 => 1602423954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f898eabd2005_89913632 (Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="col-6 fond  position-relative">




<header class="d-flex align-items-center ">
    <img class="logo mt-2" src="<?php echo $_smarty_tpl->tpl_vars['liens']->value['icon'];?>
">
    

    
    <nav class="nav mx-auto  ">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liens']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
        <i> </i>
            <a class="nav-link nav-item text-white font-weight-bold ml-5" href="<?php echo $_smarty_tpl->tpl_vars['link']->value['href'];?>
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
