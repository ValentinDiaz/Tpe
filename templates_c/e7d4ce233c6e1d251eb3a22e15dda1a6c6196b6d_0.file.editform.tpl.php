<?php
/* Smarty version 4.2.1, created on 2022-10-11 21:13:18
  from 'C:\xampp\htdocs\proyectos\tpe\templetes\editform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345c04ef30257_96351950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d4ce233c6e1d251eb3a22e15dda1a6c6196b6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templetes\\editform.tpl',
      1 => 1665515441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
  ),
),false)) {
function content_6345c04ef30257_96351950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="addEdit" method="POST" class="my-4">
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
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
" name="id">
                
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
