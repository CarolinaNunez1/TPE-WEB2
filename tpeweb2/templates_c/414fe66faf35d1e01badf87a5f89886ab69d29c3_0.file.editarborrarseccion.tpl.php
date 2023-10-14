<?php
/* Smarty version 3.1.39, created on 2023-10-14 05:12:57
  from 'C:\xampp\htdocs\tpeweb2\templates\editarborrarseccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652a0739910701_10503911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '414fe66faf35d1e01badf87a5f89886ab69d29c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\editarborrarseccion.tpl',
      1 => 1697220328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652a0739910701_10503911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid w-100 d-flex justify-content-center">
    <div>

        <h1> EDITAR Y BORRAR SECCIONES</h1>
        <table class="my-4 table">
            <thead>

                <tr>


                    <th class="col">TIPO</th>
                    <th class="col">DESCRIPCION</th>
                    <th class="col">ORDEN</th>
                    <th class="col">NOTICIA</th>

                    <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                        <th class="col">borrar</th>
                        <th class="col">editar</th>
                    <?php }?>


                </tr>

            </thead>


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablaSecciones']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <form class="form-alta" action="editarseccion/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_seccion;?>
" method="POST">
                    <tr style=text-align:center>

                        <td><input class="form-control" type="text" name="tipo" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->tipo;?>
"></td>
                        <td><input class="form-control" type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
"></td>
                        <td><input class="form-control" type="int" name="orden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->orden;?>
"></td>
                        <td><input class="form-control" type="number" name="id_noticia" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_noticia;?>
"></td>
                        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                            <td><a class="btn btn-primary" href="borrarseccion/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_seccion;?>
">borrar</a></td>
                            <td><button type="submit" class="btn btn-primary">editar</button></td>
                        <?php }?>
                    </tr>
                </form>

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
