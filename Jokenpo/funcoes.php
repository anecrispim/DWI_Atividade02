<?php
    function GeraEscolha($escolha) {
        switch ($escolha) {
			case '1':
				echo "<img src='pedra.png' width='150px'><br>";
				break;
			case '2':
				echo "<img src='papel.png' width='150px'><br>";
				break;
			case '3':
				echo "<img src='tesoura.png' width='150px'><br>";
				break;
		}
    }
?>