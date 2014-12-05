<!DOCTYPE HTML>
<html>
<link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico" >
<head>
<meta charset=utf-8>
</head>
<script>
function clock() {
var d = new Date();
var month = d.getMonth()
var day = d.getDate();
var hours = d.getHours();
var minutes = d.getMinutes();
var seconds = d.getSeconds();

if (month == 0) month = "января"
 else if (month == 1) month = "февраля"
 else if (month == 2) month = "марта"
 else if (month == 3) month = "апреля"
 else if (month == 4) month = "мая"
 else if (month == 5) month = "июня"
 else if (month == 6) month = "июля"
 else if (month == 7) month = "августа"
 else if (month == 8) month = "сентября"
 else if (month == 9) month = "октября"
 else if (month == 10) month = "ноября"
 else if (month == 11) month = "декабря";

if (day <= 9) day = "0" + day;
if (hours <= 9) hours = "0" + hours;
if (minutes <= 9) minutes = "0" + minutes;
if (seconds <= 9) seconds = "0" + seconds;

date_time = "Сегодня - " + day + " " + month + " " + d.getFullYear() +
" г.&nbsp;&nbsp;&nbsp;Текущее время - "+ hours + ":" + minutes + ":" + seconds;
if (document.layers) {
 document.layers.doc_time.document.write(dispTime);
 document.layers.doc_time.document.close();
}
else doc_time.innerHTML = date_time;
 setTimeout("clock()", 1000);
}
</script>
<span id="doc_time">
 Дата и время
</span>
<script language="JavaScript" type="text/javascript">
 clock();
</script>
</body>
</html>
