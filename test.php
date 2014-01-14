<?PHP
// Определяем что такое машины, что она умеет делать и как.
class car
{
    var $color = 'White';
        function tut_tut()    {  echo "BIp BIp";  }
        }
        
        $honda = new car; // присваиваем переменной honda объект - Машину
        echo $honda->color; // Выводим свойство машины - цвет 

//
//$ch = curl_init('http://www.php.su');
//curl_exec($ch); // выполняем запрос curl - обращаемся к сервера php.su
//curl_close($ch);
?>
