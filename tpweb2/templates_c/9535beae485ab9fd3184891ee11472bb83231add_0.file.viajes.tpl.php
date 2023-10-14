<?php
/* Smarty version 3.1.39, created on 2023-10-14 06:05:01
  from 'C:\xampp\htdocs\tpweb2\templates\viajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652a136dce5141_57148108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9535beae485ab9fd3184891ee11472bb83231add' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpweb2\\templates\\viajes.tpl',
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
function content_652a136dce5141_57148108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid container d-flex justify-content-center">
<div class="w-25 mt-4 container-lg">
<?php if ($_smarty_tpl->tpl_vars['mostrarTodo']->value) {?>
   
    <h1 class="display-5"><?php echo $_smarty_tpl->tpl_vars['nombre_conductor']->value;?>
</h1>
    
<?php } else { ?>
    <h1 class="display-5">Viajes</h1>
<?php }?>    
    <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['viajes']->value, 'viaje');
$_smarty_tpl->tpl_vars['viaje']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['viaje']->value) {
$_smarty_tpl->tpl_vars['viaje']->do_else = false;
?>
            <li class="list-group-item mb-4"><a href="detalle/<?php echo mb_strtolower(str_replace(' ','-',$_smarty_tpl->tpl_vars['viaje']->value->origen), 'UTF-8');?>
/<?php echo $_smarty_tpl->tpl_vars['viaje']->value->id_viaje;?>
"><?php echo $_smarty_tpl->tpl_vars['viaje']->value->origen;?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    </div>
</div>
<a href="conductores" class="volver">VOLVER</a>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
