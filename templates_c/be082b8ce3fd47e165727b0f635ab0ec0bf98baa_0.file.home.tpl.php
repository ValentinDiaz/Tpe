<?php
/* Smarty version 4.2.1, created on 2022-10-12 05:00:41
  from 'C:\xampp\htdocs\proyectos\tpe\templetes\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63462dd989f861_82553071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be082b8ce3fd47e165727b0f635ab0ec0bf98baa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templetes\\home.tpl',
      1 => 1665543637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
    'file:templetes/addDisco.tpl' => 1,
  ),
),false)) {
function content_63462dd989f861_82553071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templetes/addDisco.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<h1>discos</h1>
<a href='generos/' type='button' class='btn btn-danger'>ver generos </a></li>

    <div  class="discos">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discos']->value, 'disco');
$_smarty_tpl->tpl_vars['disco']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
$_smarty_tpl->tpl_vars['disco']->do_else = false;
?>
            <div class="disco">
                <ul>
                <li><?php echo $_smarty_tpl->tpl_vars['disco']->value->titulo;?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['disco']->value->artista;?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['disco']->value->anio;?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['disco']->value->genero;?>

                <li><a href='delete/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></li>
                <li><a href='showEdit/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
' type='button' class='btn btn-danger'>editar</a></li>
                <li><a href='showMore/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
' type='button' class='btn btn-danger'>ver mas</a></li>
                <li><a href='showByGeneros/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id;?>
' type='button' class='btn btn-danger'>ver mas por genero </a></li>
                </ul>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
       
       
       
    </div>    
<?php }
}
