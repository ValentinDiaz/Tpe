<?php
/* Smarty version 4.2.1, created on 2022-10-07 22:20:50
  from 'C:\xampp\htdocs\proyectos\tpe\templetes\discoList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63408a228bb3c9_96777954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe8c69fee2830158cacfeec9ba341d4574a04690' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templetes\\discoList.tpl',
      1 => 1665174046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63408a228bb3c9_96777954 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>discos</h1>
    
    <div>
        
        <div class="botones-header">
            <button>login</button>
            <button>gener</button>
        </div>   
    </div>

    <div  class="discos">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discos']->value, 'disco');
$_smarty_tpl->tpl_vars['disco']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
$_smarty_tpl->tpl_vars['disco']->do_else = false;
?>
            <div class="disco">
            <p><?php echo $_smarty_tpl->tpl_vars['disco']->value->titulo;?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['disco']->value->artista;?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['disco']->value->genero;?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['disco']->value->anio;?>
</p>
        </div>
            
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       
       
    </div>    
<?php }
}
