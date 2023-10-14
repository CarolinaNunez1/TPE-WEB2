<?php
/* Smarty version 3.1.39, created on 2023-10-14 09:19:33
  from 'C:\xampp\htdocs\tpeweb2\templates\ingresanoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652a41057eb142_08590760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a115d22ba554b20879f4291269d4bd3c92e2dda8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\ingresanoticia.tpl',
      1 => 1697267927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652a41057eb142_08590760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container d-flex justify-content-center">
    <div class="m-3 w-25">
        <h2>AGREGAR NOTICIA</h2>
        <form class="form-alta" action="agregar-noticia" method="post"> 
            <div class="col-auto mb-2">
                <input class="form-control" placeholder="Titulo.." type="text" name="titulo" id="titulo" >
            </div>
            <div class="col-auto mb-2">
                <input class="form-control" placeholder="autor.." type="text" name="autor" id="autor" >
            </div>
        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?> 
        <input type="submit" class="btn btn-primary">
    <?php }?>
        </form>
            </div>
</div>
<p><?php echo $_smarty_tpl->tpl_vars['aviso']->value;?>
</p>
<a href="noticias" class="volver">VOLVER</a>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
