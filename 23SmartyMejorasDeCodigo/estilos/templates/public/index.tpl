<html>
<head>
	<title>Proyecto</title>
</head>
<body>
	<style type="text/css">
	{literal}
		input[type=text], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		input[type=password], select {
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
	{/literal}
	</style>
	<div>
		<h1>Login</h1>
		<form action="index.php?modo=login" method="POST">
			<label>User: </label><input type="text" name="user"/><br/><br/>
			<label>Pass: </label><input type="password" name="pass"/><br/><br/>
			<input type="hidden" name="login" value="1">
			<a href="index.php?modo=registro">Registrarme</a><br/><br/>
			<a href="index.php?modo=claveperdida">Recuperar contraseña</a><br/><br/>
			<input type="submit" value="Iniciar sesion"><br/><br/>
		</form>
		{if isset($error)} <!-- isset() retorna True si la variable esta definida. -->
			{$error} <!-- Muestra el mensaje de error. -->
		{/if} <!-- end etiqueta if -->
	</div>
</body>
</html>
