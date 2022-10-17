<?php
/* Smarty version 4.2.1, created on 2022-10-11 21:59:55
  from 'C:\xampp\htdocs\proyectos\tpe\templetes\showDiscosByGe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345cb3bb88b03_18933380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9f19b3179adb0e6b2eb22a7f14df5ca7287b134' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templetes\\showDiscosByGe.tpl',
      1 => 1665518064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
  ),
),false)) {
function content_6345cb3bb88b03_18933380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discos']->value, 'disco');
$_smarty_tpl->tpl_vars['disco']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
$_smarty_tpl->tpl_vars['disco']->do_else = false;
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['disco']->value->titulo;?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['disco']->value->anio;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
