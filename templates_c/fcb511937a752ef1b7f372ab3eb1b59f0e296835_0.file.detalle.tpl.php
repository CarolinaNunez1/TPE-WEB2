<?php
/* Smarty version 3.1.39, created on 2023-10-16 04:13:48
  from 'C:\xampp\htdocs\tpeweb2\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652c9c5cd5d9d1_43116075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcb511937a752ef1b7f372ab3eb1b59f0e296835' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\detalle.tpl',
      1 => 1697422231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652c9c5cd5d9d1_43116075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container mt-2">


    <ul class="list-group">
      

        <li class="list-group-item mb-3">Tipo <?php echo $_smarty_tpl->tpl_vars['seccion']->value->tipo;?>
</li>
        <li class="list-group-item">Descripcion <?php echo $_smarty_tpl->tpl_vars['seccion']->value->descripcion;?>
</li>
        <li class="list-group-item">Orden <?php echo $_smarty_tpl->tpl_vars['seccion']->value->orden;?>
</li>
        <li class="list-group-item"> Noticia <?php echo $_smarty_tpl->tpl_vars['seccion']->value->id_noticia;?>
</li>

      
    </ul>
   
</div>
 
  <a href="noticia" class="volver">VOLVER</a>  
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
