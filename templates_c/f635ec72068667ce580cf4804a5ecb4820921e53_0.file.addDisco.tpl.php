<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:43:35
  from 'C:\xampp\htdocs\proyectos\negro\templetes\addDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348787789ec46_68110321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f635ec72068667ce580cf4804a5ecb4820921e53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\negro\\templetes\\addDisco.tpl',
      1 => 1665638191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348787789ec46_68110321 (Smarty_Internal_Template $_smarty_tpl) {
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
