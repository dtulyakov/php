<?php
if (!$_POST[“submitt”]){
	echo “<form action=’’ method=’POST’>
	<h3>Укажите число:</h3>
	<input type=’text’ name=’digit’>
	<input type=’submit’ name=’submitt’ value=’ok’>
	</form>”;
	}
else{
	$digit=$_POST[“digit”];
	if ($digit<0){
		echo “Данное число меньше нуля”;
	}
	elseif ($digit>=0){
		echo “Это число больше или равно нулю”;
	}
	else{
		echo “Это не число”;
	}
}
?>