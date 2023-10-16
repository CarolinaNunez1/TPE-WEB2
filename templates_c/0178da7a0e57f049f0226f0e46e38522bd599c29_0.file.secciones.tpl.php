<?php
/* Smarty version 3.1.39, created on 2023-10-16 02:33:57
  from 'C:\xampp\htdocs\tpeweb2\templates\secciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652c84f5ed7e58_24863442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0178da7a0e57f049f0226f0e46e38522bd599c29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\secciones.tpl',
      1 => 1697416364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652c84f5ed7e58_24863442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid container d-flex justify-content-center">
<div class="w-25 mt-4 container-lg">
<?php if ($_smarty_tpl->tpl_vars['mostrarTodo']->value) {?>
   
    <h1 class="display-5"><?php echo $_smarty_tpl->tpl_vars['titulo_noticia']->value;?>
</h1>
    
<?php } else { ?>
    <h1 class="display-5">Secciones</h1>
<?php }?>    
    <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secciones']->value, 'seccion');
$_smarty_tpl->tpl_vars['seccion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seccion']->value) {
$_smarty_tpl->tpl_vars['seccion']->do_else = false;
?>
            <li class="list-group-item mb-4"><a href="detalle/<?php echo mb_strtolower(str_replace(' ','-',$_smarty_tpl->tpl_vars['seccion']->value->tipo), 'UTF-8');?>
/<?php echo $_smarty_tpl->tpl_vars['seccion']->value->id_seccion;?>
"><?php echo $_smarty_tpl->tpl_vars['seccion']->value->tipo;?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    </div>
</div>
<a href="noticias" class="volver">VOLVER</a>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
