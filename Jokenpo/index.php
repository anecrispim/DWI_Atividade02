<!DOCTYPE html>
<?php
	include 'funcoes.php';
	isset($_POST["escolha"]) ? $escolha= $_POST["escolha"] : $escolha= 0;
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Jokenpô</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<link rel="icon" href="img/logo.png">
</head>
<body style="margin: 2%">
	<form action="" method="post">
		<fieldset>
			<legend>Jokenpô</legend>
			<label for="qtdDados" class="form-label">O que deseja jogar?</label><br>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="escolha" id="escolha" value="1" <?= $escolha == '1' ? 'checked' : '' ?>>
				<label class="form-check-label" for="escolha">Pedra</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="escolha" id="escolha" value="2" <?= $escolha == '2' ? 'checked' : '' ?>>
				<label class="form-check-label" for="escolha">Papel</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="escolha" id="escolha" value="3" <?= $escolha == '3' ? 'checked' : '' ?>>
				<label class="form-check-label" for="escolha">Tesoura</label>
			</div>
			<br>
			<button type="submit" class="btn btn-primary" name="acao" id="acao">Enviar</button>
		</fieldset>
	</form>
	<br>
	<?php
		/* 1 = Pedra; 2 = Papel; 3 = Tesoura */
		if ($escolha != 0) {
			print('<h6>Sua Escolha: </h6>');
			GeraEscolha($escolha);

			print('<h6>Escolha do Computador: </h6>');
			$aleatorio= rand(1,3);
			GeraEscolha($aleatorio);

			if ($escolha == 1 && $aleatorio == 3 || $escolha == 2 && $aleatorio == 1 || $escolha == 3 && $aleatorio == 2) {
				print('<br><h5>Você ganhou!</h5>');
				print('<img src="img/comemo.gif" width="100">');
			} else if ($escolha == 3 && $aleatorio == 1 || $escolha == 1 && $aleatorio == 2 || $escolha == 2 && $aleatorio == 3) {
				print('<br><h5>Você perdeu!</h5>');
				print('<img src="img/perdeu.gif" width="100">');
			} else if ($escolha == 1 && $aleatorio == 1 || $escolha == 2 && $aleatorio == 2 || $escolha == 3 && $aleatorio == 3) {
				print('<br><h5>Empate!</h5>');
				print('<img src="img/empate.gif" width="100">');
			}
		}
	?>
</body>
</html>