<?php
/* Smarty version 3.1.39, created on 2023-10-13 18:48:39
  from 'C:\xampp\htdocs\tpweb2\templates\conductores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652974e79e9ae7_76197639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1445a51c3ffcd68b0799363ba88737447153290e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpweb2\\templates\\conductores.tpl',
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
function content_652974e79e9ae7_76197639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<a href="viajes" class="m-3"><button type="button" class="btn btn-success">Ver viajes</button></a>

     <a href="tablaconductores" class="m-3"><button type="button" class="btn btn-success">Editar conductores</button></a>
    <a href="tablaviajes" class="m-3"><button type="button" class="btn btn-success">Editar viajes</button></a>
    <a href="panel" class="m-3"><button type="button" class="btn btn-danger">Administrador</button></a>
<a href="logout" class="m-3"><button type="button" class="btn btn-danger">Log Out</button></a>

    <a href="agregarconductor" class="m-3"><button type="button" class="btn btn-success">Agregar conductor</button></a>
    <a href="agregarviaje" class="m-3"><button type="button" class="btn btn-success">Agregar viaje</button></a>

    <a href="registro" class="m-3"><button type="button" class="btn btn-success">Registrarse</button></a>
    <a href="login" class="m-3"><button type="button" class="btn btn-warning">Log In</button></a>


<div class="container w-75 d-flex flex-wrap my-2 mb-3">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conductores']->value, 'conductor');
$_smarty_tpl->tpl_vars['conductor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conductor']->value) {
$_smarty_tpl->tpl_vars['conductor']->do_else = false;
?>
        <div class="conductor mx-auto">
            <a href="conductor/<?php echo str_replace(' ','-',$_smarty_tpl->tpl_vars['conductor']->value->nombre);?>
/<?php echo $_smarty_tpl->tpl_vars['conductor']->value->id_conductor;?>
">
                <p><?php echo $_smarty_tpl->tpl_vars['conductor']->value->nombre;?>
</p>
            </a>
        </div>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
