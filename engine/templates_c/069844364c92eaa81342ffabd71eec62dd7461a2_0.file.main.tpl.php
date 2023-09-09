<?php
/* Smarty version 3.1.34-dev-7, created on 2023-09-06 17:21:14
  from '/var/www/html/ufcshop/engine/templates/front-office/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_64f898eabd4825_56006447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '069844364c92eaa81342ffabd71eec62dd7461a2' => 
    array (
      0 => '/var/www/html/ufcshop/engine/templates/front-office/main.tpl',
      1 => 1602369938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f898eabd4825_56006447 (Smarty_Internal_Template $_smarty_tpl) {
?>


<main class="container">
    <section class="d-flex justify-content-center align-items-center message position-relative slogan">

        <article>

        <p class="main "> <?php echo $_smarty_tpl->tpl_vars['titreFooter']->value[0]['titre'];?>
, <br> Vous allez <span class="text-primary">A-DO-RER</span> les nouveautés ! </p>
        <button class="btn text-white clique font-weight-bold btn-primary"> Cliquez ici </button>

        <img class="position-absolute w-50 ballon" src="./asset/img/test3.png">
        <img src="./asset/img/logbal.png " class="logbal position-absolute">
        </article>
        
    </section>
    <aside></aside>
</main>
<?php }
}
