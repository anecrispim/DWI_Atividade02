<!DOCTYPE html>
<?php
	include 'funcoes.php';
	isset($_POST["qtdDados"]) ? $qtdDados = $_POST["qtdDados"] : $qtdDados = 0;
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Jogo dos Dados</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<link rel="icon" href="img/logo.png">
</head>
<body style="margin: 2%">
	<form action="" method="post">
		<fieldset>
			<legend>Jogo dos Dados</legend>
			
			<label for="qtdDados" class="form-label">Quantos dados deseja jogar?</label><br>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="qtdDados" value="1" <?= $qtdDados == '1' ? 'checked' : '' ?>>
				<label class="form-check-label" for="qtdDados">1</label>
			</div>
			
			<div class="form-check">
				<input class="form-check-input" type="radio" name="qtdDados" value="2" <?= $qtdDados == '2' ? 'checked' : '' ?>>
				<label class="form-check-label" for="qtdDados">2</label>
			</div>
			<br>
			<button type="submit" class="btn btn-primary" name="acao" id="acao">Enviar</button>
		</fieldset>
	</form>
	<br>
	<?php
		if ($qtdDados == 1){
			print('<h6>Sua Escolha: </h6>');
			$n1= rand(1, 6);
			GeraDados($n1);

			print('<h6>Escolha do Computador: </h6>');
			$n1C= rand(1, 6);
			GeraDados($n1C);

			if ($n1 > $n1C) {
				print('<br><br><h5>Você ganhou!</h5>');
				print('<img src="img/comemo.gif" width="100">');
			} else if ($n1 < $n1C){
				print('<br><br><h5>Você perdeu!</h5>');
				print('<img src="img/perdeu.gif" width="100">');
			} else {
				print('<br><br><h5>Empate!</h5>');
				print('<img src="img/empate.gif" width="100">');
			}
		} else if ($qtdDados == 2) {
			print('<h6>Sua Escolha</h6>');
			$n1= rand(1, 6);
			$n2= rand(1, 6);
			GeraDados($n1);
			GeraDados($n2);

			print('<br><br><h6>Escolha do Computador: </h6>');
			$n1C= rand(1, 6);
			$n2C= rand(1, 6);
			GeraDados($n1C);
			GeraDados($n2C);

			$soma = $n1 + $n2;
			$somaC = $n1C + $n2C;

			if ($soma > $somaC) {
				print('<br><br><h5>Você ganhou!</h5>');
				print('<img src="img/comemo.gif" width="100">');
			} else if ($soma < $somaC) {
				print('<br><br><h5>Você perdeu!</h5>');
				print('<img src="img/perdeu.gif" width="100">');
			} else {
				print('<br><br><h5>Empate!</h5>');
				print('<img src="img/empate.gif" width="100">');
			}
		}
	?>
</body>
</html>