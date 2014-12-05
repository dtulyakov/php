<!DOCTYPE html>
<html>
<html lang="ru">
<link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico" >
<head>
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/sw/css/style.css" />
<script type="text/javascript" src="jquery.js"></script>
<title>SW</title>
</head>
<body bgcolor="#f0f0f0" background="" text="gray">
<!--<body bgcolor="#e6e6e6" background="" text="gray">-->

<div class="mainhead">
<?php include "timej.php";?>
</div>

<div class="mainhead">
<?php system('uptime');?>
</div>

<!--
<div class="mainhead">
<?php
echo '<pre>';
system('top');
echo '</pre>';
?>
</div>
-->

<div class="main">
	<div class="blok-main">
		<div class="blok">
			<div id="content-sw59"></div>
		</div>
	</div>

	<div class="blok-main">
		<div class="blok">
			<div id="content-sw60"></div>
		</div>
	</div>

	<div class="blok-main">
		<div class="blok">
			<div id="content-sw61"></div>
		</div>
	</div>
	
</div>
<div class="main">
	<hr>
</div>
<div class="mainhead">
	<a>[X.Y] - X == SFP transceiver</a>
</div>

<div class="main-pon">
	<div class="blok-main-pon">
		<div class="blok-pon">
			<div id="content-pon1"></div>
		</div>
	</div>

	<div class="blok-main-pon">
		<div class="blok-pon">
			<div id="content-pon2"></div>
		</div>
	</div>
</div>

	<script>
		function show()
		{
			$.ajax({
				url: "sw59.php",
				cache: false,
				success: function(html){
					$("#content-sw59").html(html);
				}
			});

			$.ajax({
				url: "sw60.php",
				cache: false,
				success: function(html){
					$("#content-sw60").html(html);
				}
			});

			$.ajax({
				url: "sw61.php",
				cache: false,
				success: function(html){
					$("#content-sw61").html(html);
				}
			});

			$.ajax({
				url: "pon1.php",
				cache: false,
				success: function(html){
					$("#content-pon1").html(html);
				}
			});

			$.ajax({
				url: "pon2.php",
				cache: false,
				success: function(html){
					$("#content-pon2").html(html);
				}
			});

		}
		$(document).ready(function(){
			show();
			setInterval('show()',10000);
		});
	</script>

<footer>
<div class="mainfooter">
<a href="http://codething.ru/ajax.php" target="_blank">ajax</a>
<a href="http://biparasite.ru/?p=548#more-548" target="_blank">snmp</a>
</div>
</footer>

</body>
</html>
