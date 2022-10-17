<?php
/* Smarty version 4.2.1, created on 2022-10-11 20:47:57
  from 'C:\xampp\htdocs\proyectos\tpe\templetes\addDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345ba5dcf7679_45078823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3a00f15a8e40c3b88b828cf429b6cbfe4f6ed8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templetes\\addDisco.tpl',
      1 => 1665514074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6345ba5dcf7679_45078823 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                Titulo:<input type="text" name="titulo">
                Artista:<input type="text" name="artista">
                Año:<input type="text" name="año">
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
        </div>

        <div class="col-3">
            <div class="form-group">
                
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
