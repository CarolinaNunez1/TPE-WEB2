<?php
/* Smarty version 3.1.39, created on 2023-10-16 19:12:01
  from 'C:\xampp\htdocs\TPE-WEB2\templates\ingresaseccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652d6ee13b4e25_92980300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '084b80433a3e2842d8c71fe94ff78128fd1c8d1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\ingresaseccion.tpl',
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
function content_652d6ee13b4e25_92980300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container d-flex justify-content-center">
    <div class="m-3 w-25">
           <h2>AGREGAR SECCION</h2>
            <form class="form-alta" action="agregar-seccion" method="POST"> 
                <div class="col-auto mb-2">
                    <input placeholder="tipo" type="text" name="tipo" id="tipo" required>
                </div>
                <div class="col-auto mb-2">
                   <input placeholder="descripcion" type="text" name="descripcion" id="descripcion" required>
                </div>
                <div class="col-auto mb-2">
                   <input placeholder="orden" type="int" name="orden" id="orden" required>
                </div>
                <select class="custom-select mb-2 col-7" name="id_noticia">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
$_smarty_tpl->tpl_vars['noticia']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->do_else = false;
?>
                       <option value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value->id_noticia;?>
"><?php echo $_smarty_tpl->tpl_vars['noticia']->value->titulo;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <br>
              <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?> 
             <input type="submit" class="btn btn-primary">
             <?php }?> 
            </form>
    </div>

</div>
<a href="noticias" class="volver">VOLVER</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
}
