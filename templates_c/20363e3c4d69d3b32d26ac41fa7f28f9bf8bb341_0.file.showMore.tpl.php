<?php
/* Smarty version 4.2.1, created on 2022-10-13 05:40:16
  from 'C:\xamp\htdocs\proyectos\negro\templetes\showMore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634788a0d0b106_25344674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20363e3c4d69d3b32d26ac41fa7f28f9bf8bb341' => 
    array (
      0 => 'C:\\xamp\\htdocs\\proyectos\\negro\\templetes\\showMore.tpl',
      1 => 1665518343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
  ),
),false)) {
function content_634788a0d0b106_25344674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1><?php echo $_smarty_tpl->tpl_vars['disco']->value->titulo;?>
 </h1>
        <p> fue lanzado en el <?php echo $_smarty_tpl->tpl_vars['disco']->value->anio;?>
 por <?php echo $_smarty_tpl->tpl_vars['disco']->value->artista;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['disco']->value->genero;
}
}
