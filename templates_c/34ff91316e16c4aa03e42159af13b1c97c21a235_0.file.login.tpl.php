<?php
/* Smarty version 4.2.1, created on 2022-10-14 05:39:57
  from 'C:\xampp\htdocs\proyectos\negro\templetes\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348da0d74e6a3_49364513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34ff91316e16c4aa03e42159af13b1c97c21a235' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\negro\\templetes\\login.tpl',
      1 => 1665718792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templetes/header.tpl' => 1,
  ),
),false)) {
function content_6348da0d74e6a3_49364513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templetes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  
  <div>
      <div>
          <div>
              <h2>login</h2>
              <form action="verify" method="POST" >
                  <input placeholder="email"  type="text" name="email" id="email" required>
                  <input placeholder="password"  type="password" name="password" id="password" >
                  <button type="submit">Guardar</button>
             </form>
             <h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
          </div>
      </div>
  </div>
<?php }
}
