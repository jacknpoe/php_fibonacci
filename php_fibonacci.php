<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Sequência de Fibonacci</title>
 		<link rel="stylesheet" href="php_fibonacci.css"/>
		<link rel="icon" type="image/png" href="php_fibonacci.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php
			header( "Content-Type: text/html; charset=ISO-8859-1", true);
			date_default_timezone_set ("America/Sao_Paulo");

			$resultado = '';
			$quantidade = '';

			if( isset( $_POST[ 'gerar']))
			{
				$quantidade = $_POST["quantidade"];
				$quantidade_i = intval( $quantidade);
				// mágica
				$primeiro = 0;
				$segundo = 1;
				if( $quantidade_i > 0)
				{
					$resultado = strval( $primeiro) ;
				}
				if( $quantidade_i > 1)
				{
					$resultado = $resultado . ' ' . strval( $segundo);
				}
				for( $iterador = 3; $iterador <= $quantidade_i; $iterador++)
				{
					$temporario = $segundo;
					$segundo = $primeiro + $segundo;
					$primeiro = $temporario;
					$resultado = $resultado . ' ' . strval( $segundo);
				}
			}
		?>
		<h1>Sequência de Fibonacci<br></h1>

		<form action="php_fibonacci.php" method="POST" style="border: 0px">
			<p>Quantidade: <input type="text" name="quantidade" style="width: 100px" value="<?php echo $quantidade; ?>"></p>
			<p><input type="submit" name="gerar" value="Gerar"></p>
		</form>

		<br><p>Resultado: <?php echo $resultado; ?></p><br><br>
		<p><a href="https://github.com/jacknpoe/php_fibonacci">Repositório no GitHub</a></p><br><br>
		<form action="index.html" method="POST" style="border: 0px">
			<p><input type="submit" name="voltar" value="Voltar"></p>
		</form>
	</body>
</html>