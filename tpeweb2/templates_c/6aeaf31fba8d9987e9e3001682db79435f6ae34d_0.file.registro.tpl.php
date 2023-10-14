<?php
/* Smarty version 3.1.39, created on 2023-10-13 20:25:34
  from 'C:\xampp\htdocs\tpeweb2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65298b9e256ee6_52751492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aeaf31fba8d9987e9e3001682db79435f6ae34d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2\\templates\\registro.tpl',
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
function content_65298b9e256ee6_52751492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class = "container w-75 d-flex justify-content-center">
  <div class="m-3 w-25 container-registro">
    <h2>SIGN UP</h2>
  
    <form method="POST"  action="signup">
        <div class="col-auto mb-2">
          <label for="email-registration" class="form-label">Email</label>
          <?php if (!(isset($_smarty_tpl->tpl_vars['errorXcampo']->value["emailError"]))) {?>
            <input type="text" class="form-control" name="email" id="email-registration" <?php if ((isset($_smarty_tpl->tpl_vars['errorXcampo']->value['email']))) {?> value="<?php echo $_smarty_tpl->tpl_vars['errorXcampo']->value['email'];?>
" <?php } else { ?> placeholder="email@example.com"<?php }?>>
          <?php } else { ?>
            <input type="text" class="form-control is-invalid" name="email" id="email-registration" placeholder="email@example.com">
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errorXcampo']->value['emailError'];?>
</div>
          <?php }?>
        </div>
  
        <div class="col-auto mb-2">
          <label for="name-registration" class="form-label">Nombre</label>
          <?php if (!(isset($_smarty_tpl->tpl_vars['errorXcampo']->value["nombreError"]))) {?>
          <input type="text" class="form-control" name="nombre" id="name-registration" <?php if ((isset($_smarty_tpl->tpl_vars['errorXcampo']->value['nombre']))) {?> value="<?php echo $_smarty_tpl->tpl_vars['errorXcampo']->value['nombre'];?>
" <?php } else { ?> placeholder="Nombre..."<?php }?>>
          <?php } else { ?>
            <input type="text" class="form-control is-invalid" name="nombre" id="name-registration"placeholder="nombre">
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errorXcampo']->value['nombreError'];?>
</div>
          <?php }?>
        </div>
  
        <div class="col-auto mb-2">
            <label for="password-registration" placeholder="password" class="form-label">contraseña</label>
            <?php if (!(isset($_smarty_tpl->tpl_vars['errorXcampo']->value["passwordError"]))) {?>
              <input type="password" class="form-control" name="password" id = "password-registration" <?php if ((isset($_smarty_tpl->tpl_vars['errorXcampo']->value['password']))) {?> value="<?php echo $_smarty_tpl->tpl_vars['errorXcampo']->value['password'];?>
" <?php } else { ?> placeholder="password"<?php }?>>
            <?php } else { ?>
              <input type="password" class="form-control is-invalid" name="password" id = "password-registration" placeholder="password">
              <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['errorXcampo']->value['passwordError'];?>
</div>
            <?php }?>
        </div>
  
      <button type="submit" class="btn btn-primary">Submit</button>
  
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
