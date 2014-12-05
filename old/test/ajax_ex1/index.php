<html>
<head>
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<div id="content"></div><br />
	<div id="content2"></div><br />
		<script>
		function show()
		{
			$.ajax({
				url: "time.php",
				cache: false,
				success: function(html){
					$("#content").html(html);
				}
			});

			$.ajax({
				url: "time.php",
				cache: false,
				success: function(html){
					$("#content2").html(html);
				}
			});
		}
		$(document).ready(function(){
			show();
			setInterval('show()',1000);
		});
	</script>
</body>
</html>