<?php
/* Smarty version 3.1.39, created on 2023-10-14 06:05:08
  from 'C:\xampp\htdocs\tpweb2\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652a1374bbfc51_94249805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e742b9bc749ceefd9a12820675db1ee58ca836a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpweb2\\templates\\detalle.tpl',
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
function content_652a1374bbfc51_94249805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-2">

    <ul class="list-group">
        <li class="list-group-item mb-3">Origen | <?php echo $_smarty_tpl->tpl_vars['viaje']->value->origen;?>
</li>
        <li class="list-group-item">Destino | <?php echo $_smarty_tpl->tpl_vars['viaje']->value->destino;?>
</li>
        <li class="list-group-item">Fecha | <?php echo $_smarty_tpl->tpl_vars['viaje']->value->fecha;?>
</li>
        <li class="list-group-item">Salida | <?php echo $_smarty_tpl->tpl_vars['viaje']->value->salida;?>
</li>
        <li class="list-group-item">Llegada | <?php echo $_smarty_tpl->tpl_vars['viaje']->value->llegada;?>
</li>
        <li class="list-group-item">precio | <?php echo $_smarty_tpl->tpl_vars['viaje']->value->precio;?>
</li>
        <li class="list-group-item">conductor | <?php echo $_smarty_tpl->tpl_vars['viaje']->value->id_conductor;?>
</li>
    </ul>
</div>
  <a href="conductor" class="volver">VOLVER</a>  
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
