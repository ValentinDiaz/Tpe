<?php
/* Smarty version 4.2.1, created on 2022-10-15 05:36:03
  from 'C:\xampp\htdocs\proyectos\negro\templetes\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a2aa3b4fcc0_64740080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98b5fc63e13e2c51f98ba5eca7d1d2b5afddf91c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\negro\\templetes\\generos.tpl',
      1 => 1665804961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
  ),
),false)) {
function content_634a2aa3b4fcc0_64740080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<p>agrega un genero</p>
<form action="<?php if ($_smarty_tpl->tpl_vars['genero']->value) {?> editGenero  <?php } else { ?> addGenero <?php }?>" method="POST">
  <?php if ($_smarty_tpl->tpl_vars['genero']->value) {?>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" id="id"> 
  <?php }?>
  
  <?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?> 
    <input type="text" name="genero" id="genero" <?php if ($_smarty_tpl->tpl_vars['genero']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
" <?php }?>> 
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
  <?php }?>
</form>  



<table>

  <tr>

    <td>Generos</td>
    <?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?> 
    <td>eliminar</td>

    <td>editar</td>
    <?php }?>

    <td>ver genero</td>

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
    <?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?> 
    <td><a href='deleteGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
    <td><a href='ShowEditGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
' type='button' class='btn btn-danger'>Editar</a></td>
    <?php }?>
    <td> <button class='btn_discos'><a href='showByGeneros/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
'>ver por genero </a></button></td>



  </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
