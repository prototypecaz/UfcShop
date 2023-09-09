<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-02 21:15:32
  from '/var/www/html/ufcshop/engine/templates/back-office/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa068e4221e94_38311950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5135f9262129cba9890344d5320bd71815aaebd' => 
    array (
      0 => '/var/www/html/ufcshop/engine/templates/back-office/main.tpl',
      1 => 1603749681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa068e4221e94_38311950 (Smarty_Internal_Template $_smarty_tpl) {
?>
 
 
 
 
 
    <section class="container-fluid">
        <div class="row">
            <h1 class="col-4 offset-4 text-center text-primary my-5 textadm">Espace Administrateur</h1>
        </div>
    </section>

    <section class="container-fluid">
        <div id="erreurs" class="col-2 offset-5 my-2 text-danger text-center bg bg-dark h4"></div>




        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>


        <section class="container-fluid mt-3 mb-3">
            <article class="row text-center">

                <div class="col-12 col-sm-12 col-md-4 offset-md-4">

                 <form method="POST" action="./modifGeneral.php?modify=title">
                     <div class="form-group">
                        <input class="form-control" id="modifTitre" type="text" name="modifTitre" minlength="3" maxlength="75" placeholder="Super Pop" required />
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value;?>
" name="token_csrf"/>
                        <button class="btn btn-primary d-block w-50 mt-3" type="submit">Modifier le titre</button>
                    </div>
                </form>

                <form method="POST" action="./modifGeneral.php?modify=footer">
                     <div class="form-group">
                        <input class="form-control" id="modifFooterTitle" type="text" name="modifFooterTitle" minlength="3" maxlength="75" placeholder="Copyright Les 3 Bosses - Super Pop" required />
                        <button class="btn btn-primary d-block w-50 mt-3" type="submit">Modifier le footer</button>
                     </div>    
                </form>


                    <form method="POST" id="changer" enctype="multipart/form-data" action="./newArticle.php">
                
                        <div class="form-group">
                            <label for="titre">Nouveau produit</label>
                            <input class="form-control" id="titre" type="text" name="titre" minlength="3" maxlength="75" placeholder="Titre du produit" required />
                        </div>

                        <div class="form-group">
                            <label for="description"></label>
                            <textarea class="form-control" rows="5" id="description" type="text" name="description" minlength="3" maxlength="65535" placeholder="Description du produit" required ></textarea>
                        </div>

                        <div id="hiddDiv" class="d-none">
                        <img id="addImg">
                        <a href="#" class="btn btn-danger rounded-pill" id="launchDelete">Supprimer</a>
                        </div>

                        <div id="imgAsupprimer" class="form-group">
                            <label id="hidLabel" for="imageProduit">Image du produit</label>
                            <input class="form-control" type="file" id="imageProduit" name="imageProduit" accept=".jpg, .jpeg, .gif, .png, .bmp" />
                        </div>

                        <div class="form-group">
                            <label for="select">Categorie du produit</label>  
                            <select class="form-control" name="categorie" id="selectCategorie">
                                <option>--Please choose an categorie--</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value['categorie'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                         <div class="form-group">
                            <label for="select">Marque du produit:</label>  
                            <select class="form-control" name="marque" id="selectMarque">
                                <option>--Please choose an brand--</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marques']->value, 'marque');
$_smarty_tpl->tpl_vars['marque']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marque']->value) {
$_smarty_tpl->tpl_vars['marque']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['marque']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['marque']->value['marque'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <div>
                            <label for="prix">Prix</label>
                            <input class="form-control mt-3" type="number" id="prix" name="prix" step="0.01" min="10" max="100">
                        </div>

                        <div>
                            <label for="quantite">Quantité:</label>
                            <input class="form-control mt-3" type="number" id="quantite" name="quantite" min="10" max="100">
                        </div>

                        <div>
                            <label for="vendu">Vendu:</label>
                            <input class="form-control mt-3" type="number" id="vendu" name="vendu" min="0" max="1000">
                        </div>
                       
                        <button class="btn btn-primary d-block w-50 mt-3" type="submit">Envoyer</button>

                    </form>
                </div>

            </article>
        </section>

        <section class="container-fluid my-1">
            <article class="row">
                <div class="col-12 col-sm-12 col-md-4 offset-md-4">
                        <form method="POST" action="./newCategorie.php" enctype="multipart/form-data"> 
                        <div class="form-group">
                            <label for="creatCategorie"><h3 class=""><b>Categories :</b></h3></label>
                        </div>

                        <div class="form-group">
                            <input class="form-control" id="creatCategorie" type="text" name="creatCategorie" minlength="3" maxlength="75" placeholder="Nom categorie" required />
                        </div>

                      
                        <button class="mt-3 btn btn-success w-50" type="submit">Creer Categorie</button>
                         </form>
                </div>

               


    <section class="container-fluid">
        <article class="row">
            <div class="col-12 col-sm-12 col-md-4 offset-md-4">
                <div class="form-group">
                    <form method="POST"  action="./deleteArticle.php">
                    <label for="deleteArticle"><h3 class=""><b>Supprimer l'article</b></h3></label>
                </div>

                <div class="form-group">
                    <select class="form-control" name="deleteArticle" id="deleteArticle">
                        <option>--Please choose an article--</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deleteArticles']->value, 'deleteArticle');
$_smarty_tpl->tpl_vars['deleteArticle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deleteArticle']->value) {
$_smarty_tpl->tpl_vars['deleteArticle']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['deleteArticle']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['deleteArticle']->value['titre'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <div class="col-12">
                    <button class="btn btn-danger boutonhover mt-3" id="delete" type="submit">Supprimer  l'article</button>
                     
                    </div>
                    </form>
                    <button class="btn btn-warning boutonhover mt-3" id="modifArticle">Modifier l'article</button>
                </div>  

                 <a class="btn btn-danger w-50" href="./logout.php">Déconnexion</a>                      
        </article>

       
    </section>

            <?php } else { ?>

            

         <form method="POST" action="./login.php">
            <div class="row">
                <input class="col-2 offset-5 my-3" type="text" name="username" maxlength="25" placeholder="admin" required />

                <input class="col-2 offset-5 my-3" type="password" name="password" autocomplete="off" minlength="8" placeholder="*************" required />

                <button class="col-2 offset-5 my-3" type="submit">Connexion</button>

            </div>
        </form>


        <?php }?>

    </section><?php }
}
