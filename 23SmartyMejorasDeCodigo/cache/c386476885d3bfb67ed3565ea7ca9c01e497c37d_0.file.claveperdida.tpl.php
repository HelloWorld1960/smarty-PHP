<?php
/* Smarty version 3.1.30, created on 2019-08-20 22:55:31
  from "C:\Users\Jorge01\WebPrograms\PHP[Smarty]\23SmartyMejorasDeCodigo\estilos\templates\public\claveperdida.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5c5e43b7cfc3_67440982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c386476885d3bfb67ed3565ea7ca9c01e497c37d' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP[Smarty]\\23SmartyMejorasDeCodigo\\estilos\\templates\\public\\claveperdida.tpl',
      1 => 1562295575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5c5e43b7cfc3_67440982 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<title>Recuperar contraseña</title>
</head>
<body>
	<style type="text/css">
	
		input[type=email], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		div {
			width: 500px;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 10px;
		}
	
	</style>

	<div>
		<h1>Recuperar contraseña</h1>
		<form action="index.php?modo=claveperdida" method="POST">
			<label>Email: </label><input type="email" name="email"/><br/><br/>
			<input type="submit" value="Recuperar contraseña"><br/><br/>
		</form>
		<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?> <!-- isset() retorna True si la variable esta definida. -->
			<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <!-- Muestra el mensaje de error. -->
		<?php }?> <!-- end etiqueta if-->
	</div>
</body>
</html>
<?php }
}
