<?php
/* Smarty version 3.1.39, created on 2023-10-14 05:49:03
  from 'C:\xampp\htdocs\tpweb2\templates\ingresaviaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652a0fafe91f48_06831270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f39b5e3d816fa62368b4a1197b8383da3122a31b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpweb2\\templates\\ingresaviaje.tpl',
      1 => 1668054944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652a0fafe91f48_06831270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container d-flex justify-content-center">
    <div class="m-3 w-25">
           <h2>AGREGAR VIAJE</h2>
            <form class="form-alta" action="agregar-viaje" method="POST"> 
                <div class="col-auto mb-2">
                    <input placeholder="origen" type="text" name="origen" id="origen" required>
                </div>
                <div class="col-auto mb-2">
                   <input placeholder="destino" type="text" name="destino" id="destino" required>
                </div>
                <div class="col-auto mb-2">
                   <input placeholder="fecha" type="date" name="fecha" id="fecha" required>
                </div>
                <div class="col-auto mb-2">
                    <input placeholder="salida" type="time" name="salida" id="salida" required>
                </div>
                <div class="col-auto mb-2">
                    <input placeholder="llegada" type="time" name="llegada" id="llegada" required>
                </div>
                <div class="col-auto mb-2">
                    <input placeholder="precio" type="number" name="precio" id="precio" required>
                </div>
                <select class="custom-select mb-2 col-7" name="id_conductor">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conductores']->value, 'conductor');
$_smarty_tpl->tpl_vars['conductor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conductor']->value) {
$_smarty_tpl->tpl_vars['conductor']->do_else = false;
?>
                       <option value="<?php echo $_smarty_tpl->tpl_vars['conductor']->value->id_conductor;?>
"><?php echo $_smarty_tpl->tpl_vars['conductor']->value->nombre;?>
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
<a href="conductores" class="volver">VOLVER</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
}
