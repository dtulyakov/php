<!DOCTYPE html>
<html>
<html lang="ru">
<link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico" >
<head>
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/sw/css/style.css" />
<script type="text/javascript" src="jquery.js"></script>
<title>trassa</title>
</head>
<body bgcolor="#f0f0f0" background="" text="gray">
<!--<body bgcolor="#e6e6e6" background="" text="gray">-->

<div class="mainhead">
<?php include "timej.php";?>
</div>

<div class="mainhead">
<?php system('uptime');?>
</div>

<div class="main">
	<hr>
</div>

<div class="main">
<div id="top-cmd"></div>
</div>

<div class="main">
	<hr>
</div>

	<script>
		function show()
		{

			$.ajax({
				url: "top-cmd.php",
				cache: false,
				success: function(html){
					$("#top-cmd").html(html);
				}
			});

		}
		$(document).ready(function(){
			show();
			setInterval('show()',1000);
		});
	</script>
<footer>
<div class="mainfooter">
<!--
<a href="http://codething.ru/ajax.php" target="_blank">ajax</a>
<a href="http://biparasite.ru/?p=548#more-548" target="_blank">snmp</a>
-->
</div>
</footer>
</body>
</html>
