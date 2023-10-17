<?php
/* Smarty version 3.1.39, created on 2023-10-17 04:16:21
  from 'C:\xampp\htdocs\TPE-WEB2\templates\ingresanoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652dee75471510_32104922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1018cc0ec83aaaa292e429f5c1ac728dbb6ec83c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\ingresanoticia.tpl',
      1 => 1697416366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652dee75471510_32104922 (Smarty_Internal_Template $_smarty_tpl) {
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
