<?php
/* Smarty version 4.2.1, created on 2022-10-11 21:59:04
  from 'C:\xampp\htdocs\proyectos\tpe\templetes\showMore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345cb087ffbd9_39348577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5faa29b5c2220926c84bf705bb4029392d1a90dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templetes\\showMore.tpl',
      1 => 1665518343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
  ),
),false)) {
function content_6345cb087ffbd9_39348577 (Smarty_Internal_Template $_smarty_tpl) {
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
