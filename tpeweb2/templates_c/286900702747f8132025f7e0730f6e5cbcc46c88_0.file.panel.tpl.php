<?php
/* Smarty version 3.1.39, created on 2023-10-13 20:25:45
  from 'C:\xampp\htdocs\tpeweb2\templates\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65298ba9c320b8_50355422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '286900702747f8132025f7e0730f6e5cbcc46c88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\panel.tpl',
      1 => 1697217021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_65298ba9c320b8_50355422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid w-100 d-flex justify-content-center">
  <div>
    <h1>Modificar permisos</h1>
   

    <table class="my-4 table">
        <thead>
            <tr>
                <th class="col">NOMBRE</th> 
                <th class="col">email</th>
               
                <th class="col">Permisos</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr style=text-align:center>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
               

                <form class="form-alta" action="modifyrol/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
" method="POST"> 

                     <td><input class="form-control" id="rol" name="rol" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->rol;?>
"></td> 
               
                     <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>   <td> <button type="submit" class="btn btn-primary"> Editar </button></td>   
         
                    <td><a class="btn btn-primary" id="borrar" href="borrarusuario/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
">borrar</a></td>
                     <?php }?>
                    </form>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <p><?php echo $_smarty_tpl->tpl_vars['aviso']->value;?>
</p>
            </tr>
   
    </table>

  </div>
</div>
<a href="noticias" class="volver">VOLVER</a>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
