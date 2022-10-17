<?php
/* Smarty version 4.2.1, created on 2022-10-13 05:35:36
  from 'C:\xamp\htdocs\proyectos\negro\templetes\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63478788af98c6_40586164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03574a8c4e7bfaef7ce12c81cc681c6d66a1b1e6' => 
    array (
      0 => 'C:\\xamp\\htdocs\\proyectos\\negro\\templetes\\generos.tpl',
      1 => 1665632132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
  ),
),false)) {
function content_63478788af98c6_40586164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<p>agrega un genero</p>
<form action="<?php if ($_smarty_tpl->tpl_vars['genero']->value) {?> editGenero  <?php } else { ?> addGenero <?php }?>" method="POST" class="my-4">
  <?php if ($_smarty_tpl->tpl_vars['genero']->value) {?>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" id="id"> 
  <?php }?>
  
  <input type="text" name="genero" id="genero" <?php if ($_smarty_tpl->tpl_vars['genero']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
" <?php }?>> 
  <button type="submit" class="btn btn-primary mt-2">Guardar</button>
  
</form>  



<table class="default">

  <tr>

    <td>Generos</td>

    <td>eliminar</td>

    <td>editar</td>

  </tr>

  <tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
    <td><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</td>
    <td><a href='deleteGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-danger'>Borrar</a></td>

    <td><a href='ShowEditGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-danger'>Editar</a></td>



  </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
