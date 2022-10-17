<?php
/* Smarty version 4.2.1, created on 2022-10-15 05:06:02
  from 'C:\xampp\htdocs\proyectos\negro\templetes\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a239acfe6c6_88850654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd65c80e49ca543ee9d1e331a2421312e12a8132a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\negro\\templetes\\header.tpl',
      1 => 1665803159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634a239acfe6c6_88850654 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>discos</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="">Discos</a>
            </li>
           <?php if (!$_smarty_tpl->tpl_vars['isUser']->value) {?> 
            <li>
                <a href="login">Login</a>
            </li>
            <?php } else { ?>
                <li>
                    <a href="logout">Logout</a>
                </li>
            <?php }?>
            <li>
                <a href='generos/' class='btn btn-danger'>Ver Generos </a>
            </li>
          </ul>
    </header>

    <!-- inicio main container -->
    <main><?php }
}
