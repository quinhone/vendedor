<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Gerenciamento de Frutas</title>
</head>
<body>
	<h1>Sys Frutas</h1>

	<br><h4>Menu Principal</h4></br>

	<form action="cadfruta.php" method="POST">
			<h4>Cadastro de Frutas</h4>
			Nome da Fruta <input type="text" name="nomeFruta">
			<p>Quantidade em Estoque <input type="text" name="quantidadeFruta"></p>
			<p> Preço <input type="text" name="precoFruta">
			<p> Tipo da Fruta <input type="text" name="tipoFruta">
			<p> Unidade de Medida <input type="text" name="unimedidaFruta">
			<p> <input type="submit" name="enviar" value="Cadastrar Fruta">
	</form>
	<form action="listafruta.php" method="POST">
			<input type="submit" name="enviar" value="Listar Frutas">
	</form>			
</body>
</html>
