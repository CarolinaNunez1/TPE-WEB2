<?php
/* Smarty version 3.1.39, created on 2023-10-13 20:26:36
  from 'C:\xampp\htdocs\tpeweb2\templates\editarborrarnoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65298bdc87b7a1_28420750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08742328dab6730aa1f463fd1ea35e5bcd46cb4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\editarborrarnoticia.tpl',
      1 => 1697220909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_65298bdc87b7a1_28420750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid w-100 d-flex justify-content-center">
    <div>
        <h1> EDITAR Y BORRAR NOTICIAS</h1>
        <table class="my-4 table">
            <thead>

                <tr>
                    <th class="col">Noticia</th>
                    <th class="col">Autor</th>
                    <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                        <th class="col"> BORRAR</th>
                        <th class="col">EDITAR</th>
                    <?php }?>


                </tr>

            </thead>

            <p class="lead"><?php echo $_smarty_tpl->tpl_vars['aviso']->value;?>
</p>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablaNoticias']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <form class="form-alta" action="editarnoticia/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_noticia;?>
" method="POST">

                    <tr>
                        <td><input class="form-control" type="text" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->titulo;?>
"></td>
                        <td><input class="form-control" type="number" name="autor" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->autor;?>
"></td>
                        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                            <td><a class="btn btn-primary" id="borrar" href="borrarnoticia/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_noticia;?>
">borrar</a></td>
                            <td><button type="submit" class="btn btn-primary">editar</button></td>
                        <?php }?>
                </form>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>

</div>

<a href="noticias" class="volver">VOLVER</a>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
