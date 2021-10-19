<!DOCTYPE html>
<?php
	$n1= 0;
	$parOuImpar= "";
	if (isset($_POST["n1"]))
		$n1= $_POST["n1"];
	if (isset($_POST["parOuImpar"]))
		$parOuImpar= $_POST["parOuImpar"];
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Par ou Impar</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<link rel="icon" href="img/logo.png">
</head>
<body style="margin: 2%">
	<form action="" method="post">
		<fieldset>
			<legend>Par ou Impar</legend>

			<label for="n1" class="form-label">Qual número deseja jogar?</label><br>
			<select name="n1" id="n1" class="form-select">
				<option value="1" <?= $n1 == '1' ? 'selected' : '' ?>>1</option> 
				<option value="2" <?= $n1 == '2' ? 'selected' : '' ?>>2</option>
				<option value="3" <?= $n1 == '3' ? 'selected' : '' ?>>3</option>
				<option value="4" <?= $n1 == '4' ? 'selected' : '' ?>>4</option>
				<option value="5" <?= $n1 == '5' ? 'selected' : '' ?>>5</option>
				<option value="6" <?= $n1 == '6' ? 'selected' : '' ?>>6</option>
				<option value="7" <?= $n1 == '7' ? 'selected' : '' ?>>7</option>
				<option value="8" <?= $n1 == '8' ? 'selected' : '' ?>>8</option>
				<option value="9" <?= $n1 == '9' ? 'selected' : '' ?>>9</option>
				<option value="10" <?= $n1 == '10' ? 'selected' : '' ?>>10</option>
			</select>
			<br>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="parOuImpar" id="parOuImpar" value="Par" <?= $parOuImpar == 'Par' ? 'checked' : '' ?>> 
				<label class="form-check-label" for="parOuImpar">Par</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="parOuImpar" id="parOuImpar" value="Impar" <?= $parOuImpar == 'Impar' ? 'checked' : '' ?>>
				<label class="form-check-label" for="parOuImpar">Impar</label>
			</div>
			<br>
			<button type="submit" class="btn btn-primary" name="acao" id="acao">Enviar</button>
		</fieldset>
	</form>
	<br>
	<?php
		if ($n1 != 0) {
			printf('<h6>Você escolheu: %s <br></h6>', $n1);
			print('<img src="img/voce.png" width="100">');

			$aleatorio= rand(1, 10);

			printf('<h6>O Computador escolheu: %s <br></h6>', $aleatorio);
			print('<img src="img/pc.png" width="100">');


			$soma= $aleatorio + $n1;
			printf('<br><br><h6>Soma: %s </h6>', $soma);

			if ($soma %2 == 0){
				if ($parOuImpar == "Par") {
					print('<h5>Você ganhou!</h5>');
					print('<img src="img/comemo.gif" width="100">');
				} else {
					print('<h5>Você perdeu!</h5>');
					print('<img src="img/perdeu.gif" width="100">');
				}
			} else {
				if ($parOuImpar == "Impar") {
					print('<h5>Você ganhou!</h5>');
					print('<img src="img/comemo.gif" width="100">');
				} else {
					print('<h5>Você perdeu!</h5>');
					print('<img src="img/perdeu.gif" width="100">');
				}
			}
		}
	?>
</body>
</html>