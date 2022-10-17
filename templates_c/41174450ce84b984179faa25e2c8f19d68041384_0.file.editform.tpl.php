<?php
/* Smarty version 4.2.1, created on 2022-10-14 05:56:16
  from 'C:\xampp\htdocs\proyectos\negro\templetes\editform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348dde00241b4_55163800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41174450ce84b984179faa25e2c8f19d68041384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\negro\\templetes\\editform.tpl',
      1 => 1665638178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
  ),
),false)) {
function content_6348dde00241b4_55163800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="addEdit" method="POST">

    <div>
        <label>Titulo:</label>
        <input type="text" name="titulo">

        <label>Artista:</label>
        <input type="text" name="artista">

        <label>Año:</label>
        <input type="text" name="año">

        <select name ="generos" id="generos">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
 </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
" name="id">
    </div>

    <button type="submit">Guardar</button>
</form><?php }
}
