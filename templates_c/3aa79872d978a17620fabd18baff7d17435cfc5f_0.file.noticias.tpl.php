<?php
/* Smarty version 3.1.39, created on 2023-10-16 17:58:13
  from 'C:\xampp\htdocs\TPE-WEB2\templates\noticias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652d5d952249a9_30798671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aa79872d978a17620fabd18baff7d17435cfc5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\noticias.tpl',
      1 => 1697471889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652d5d952249a9_30798671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<a href="secciones" class="m-3"><button type="button" class="btn btn-success">Ver secciones</button></a>

  
    <a href="tablanoticias" class="m-3"><button type="button" class="btn btn-success">Editar noticias</button></a>
    <a href="tablasecciones" class="m-3"><button type="button" class="btn btn-success">Editar secciones</button></a>
   
    <a href="panel" class="m-3"><button type="button" class="btn btn-danger">Administrador</button></a>
<a href="logout" class="m-3"><button type="button" class="btn btn-danger">Log Out</button></a>

    <a href="agregarnoticia" class="m-3"><button type="button" class="btn btn-success">Agregar noticia</button></a>
    <a href="agregarseccion" class="m-3"><button type="button" class="btn btn-success">Agregar seccion</button></a>

    <a href="registro" class="m-3"><button type="button" class="btn btn-success">Registrarse</button></a>
    <a href="login" class="m-3"><button type="button" class="btn btn-warning">Log In</button></a>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
$_smarty_tpl->tpl_vars['noticia']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->do_else = false;
?>
<div class="container w-75 d-flex flex-wrap my-2 mb-3">
    
        <div class="noticia mx-auto">
            <a href="noticia/<?php echo str_replace(' ','-',$_smarty_tpl->tpl_vars['noticia']->value->titulo);?>
/<?php echo $_smarty_tpl->tpl_vars['noticia']->value->id_noticia;?>
">
                <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value->titulo;?>
</p>
                <p> <?php echo $_smarty_tpl->tpl_vars['noticia']->value->autor;?>
</p>
            </a>
        </div>

    
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
