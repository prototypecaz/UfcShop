<?php
/* Smarty version 3.1.34-dev-7, created on 2023-09-06 17:21:14
  from '/var/www/html/ufcshop/engine/templates/front-office/header2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_64f898eabd8737_36503427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b37ee28fd173ffd2838568df5ed0821ead6083' => 
    array (
      0 => '/var/www/html/ufcshop/engine/templates/front-office/header2.tpl',
      1 => 1602423942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f898eabd8737_36503427 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="col-6 section2 ">


<div class="header2">
    
<div class="mt-1">
<a class="d-inline nav-link nav-item font-weight-bold admin text-white "  href="<?php echo $_smarty_tpl->tpl_vars['liens']->value['admin']['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['liens']->value['admin']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['liens']->value['admin']['text'];?>
</a>
</div>
<div class="d-flex align-items-center mt-2">
<input class="inputrecherche w-50 rounded" type="text" placeholder="Rechercher" id="recherche">
    <button class="buttonrecherche ml-1 "><i class=" fa fa-search recherche"></i></button>
</div>






</div><?php }
}
