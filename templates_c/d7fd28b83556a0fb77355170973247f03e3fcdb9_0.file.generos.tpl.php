<?php
/* Smarty version 4.2.1, created on 2022-10-13 03:22:39
  from 'C:\xampp\htdocs\proyectos\tpe\templetes\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6347685f8433d4_05731840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7fd28b83556a0fb77355170973247f03e3fcdb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templetes\\generos.tpl',
      1 => 1665624157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
  ),
),false)) {
function content_6347685f8433d4_05731840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<p>agrega un genero</p>
<form action="<?php if ($_smarty_tpl->tpl_vars['genero']->value) {?> editGenero  <?php } else { ?>addGenero<?php }?>" method="POST" class="my-4">
  <?php if ($_smarty_tpl->tpl_vars['genero']->value) {?>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" id="id"> 
  <?php }?>

  <input type="text" name="genero" id="genero"> 
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

    <td><a href='editGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-danger'>Editar</a></td>



  </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
