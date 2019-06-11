<?php
/* Smarty version 3.1.33, created on 2019-06-06 00:30:22
  from 'C:\wamp64\www\Tienda\vista\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf85e9e60f504_86910894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e767bd51ad955a4bc12c3e8a4d01d88080988f09' => 
    array (
      0 => 'C:\\wamp64\\www\\Tienda\\vista\\templates\\login.tpl',
      1 => 1559780477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf85e9e60f504_86910894 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--Plantilla para login. Es invocada desde login.php. solo visualiza el $error del php-->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Login Tienda Web con Plantillas</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div id='login'>
        <form action='login.php' method='post'>
        <fieldset >
           <legend>Login</legend>
            <!--si la variable error tiene algún valor se visualiza-->
            <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
            <div class='campo'>
               <label for='usuario' >Usuario:</label><br/>
                <input type='text' name='usuario' id='usuario' maxlength="50" /><br/>
            </div>
         <div class='campo'>
               <label for='password' >Contraseña:</label><br/>
                <input type='password' name='password' id='password' maxlength="50" /><br/>
           </div>
 
            <div class='campo'>
               <input type='submit' name='enviar' value='Enviar' />
         </div>
        </fieldset>
        </form>
    </div>
</body>
</html><?php }
}
