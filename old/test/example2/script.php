<?php
	header('Content-Type: text/javascript; charset=UTF-8');
	$rnd = rand(1,100);		// генерируем случайное число от 1 до 100
	echo '$("#content").html($("#content").html()+'.$rnd.'+"<BR/>");';	// выдаем код скрипта в поток вывода
?>