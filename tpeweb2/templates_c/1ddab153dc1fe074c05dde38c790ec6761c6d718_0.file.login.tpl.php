<?php
/* Smarty version 3.1.39, created on 2023-10-13 20:25:15
  from 'C:\xampp\htdocs\tpeweb2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65298b8bf3ff03_87826106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ddab153dc1fe074c05dde38c790ec6761c6d718' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\login.tpl',
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
function content_65298b8bf3ff03_87826106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class = "container w-75 d-flex justify-content-center">
    <div class="m-3 w-25">
        <form action="verify" class="my-2  form-group" method="POST">
            <div class="col-auto mb-2">
                <?php if (!(isset($_smarty_tpl->tpl_vars['errorXcampo']->value["emailError"]))) {?>
                  <input type="text" class="form-control" name="email" <?php if ((isset($_smarty_tpl->tpl_vars['errorXcampo']->value['email']))) {?> value="<?php echo $_smarty_tpl->tpl_vars['errorXcampo']->value['email'];?>
" <?php } else { ?> placeholder="email@example.com"<?php }?>>
                <?php } else { ?>
                  <input type="text" class="form-control is-invalid" name="email" placeholder="email@example.com">
                  <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errorXcampo']->value['emailError'];?>
</div>
                <?php }?>
            </div>

            <div class="col-auto mb-2">
              <?php if (!(isset($_smarty_tpl->tpl_vars['errorXcampo']->value["passwordError"]))) {?>
                <input type="password" class="form-control" name="password" <?php if ((isset($_smarty_tpl->tpl_vars['errorXcampo']->value['password']))) {?> value="<?php echo $_smarty_tpl->tpl_vars['errorXcampo']->value['password'];?>
" <?php } else { ?> placeholder="password"<?php }?>>
              <?php } else { ?>
                <input type="password" class="form-control is-invalid" name="password" placeholder="password">
                <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errorXcampo']->value['passwordError'];?>
</div>
              <?php }?>
            </div>

            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Confirmar identidad</button>
            </div>
        </form>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
          <p class="lead"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
        <?php }?>
    </div>
</div>
<a href="noticias" class="volver">VOLVER</a>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
