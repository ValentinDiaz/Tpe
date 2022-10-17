<?php
/* Smarty version 4.2.1, created on 2022-10-13 07:17:04
  from 'C:\xamp\htdocs\proyectos\negro\templetes\addDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63479f50447d47_44762459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '234a18ca9e1d2951d5d3a45736839a5725d7110d' => 
    array (
      0 => 'C:\\xamp\\htdocs\\proyectos\\negro\\templetes\\addDisco.tpl',
      1 => 1665638191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63479f50447d47_44762459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <form action="add" method="POST" class="form_dico">
        <div>
            <label>Titulo:</label>
            <input type="text" name="titulo">
        </div>
        <div>
            <label>Artista:</label>
            <input type="text" name="artista">
        </div>
        <div>
            <label>Año:</label>
            <input type="text" name="año">
        </div>
        <div>
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
        </div>
        <button type="submit">Guardar</button>
    </form>
</div><?php }
}
