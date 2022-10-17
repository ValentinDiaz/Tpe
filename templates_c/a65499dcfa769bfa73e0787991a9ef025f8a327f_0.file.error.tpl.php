<?php
/* Smarty version 4.2.1, created on 2022-10-16 07:03:49
  from 'C:\xampp\htdocs\proyectos\negro\templetes\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b90b5aacb14_59542062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a65499dcfa769bfa73e0787991a9ef025f8a327f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\negro\\templetes\\error.tpl',
      1 => 1665896560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
    'file:templetes/footer.tpl' => 1,
  ),
),false)) {
function content_634b90b5aacb14_59542062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Ocurrio un error</h1>
<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><p>volver</p></a>

<?php $_smarty_tpl->_subTemplateRender("file:templetes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
