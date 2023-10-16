<?php
/* Smarty version 3.1.39, created on 2023-10-16 19:10:02
  from 'C:\xampp\htdocs\TPE-WEB2\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652d6e6ab1e3f9_55260450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cbddb3634b4da1df26bed1c5c84a81a1ad36ee3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\detalle.tpl',
      1 => 1697422232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652d6e6ab1e3f9_55260450 (Smarty_Internal_Template $_smarty_tpl) {
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
