<?php

$json  = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=543460&appid=80b14ea3cdcf0656c5b2de3bb87a49ae');

$parameter = json_decode($json, true);

echo "<h3>Погода в городе: {$parameter['name']}, {$parameter['sys']['country']}</h3>";



echo "Погодные условия: {$parameter['weather'][0]['description']}".'<br>';

echo "Облачность: {$parameter['clouds']['all']}%".'<br>';

//Не понятно, в каких единицах измерения указана температура. Предположила, что в Кельвинах)
$a = $parameter['main']['temp'];
$b = round($a-273.15, 2); 
echo "Температура: $b"."°C".'<br>';

echo "Атмосферное давление: {$parameter['main']['pressure']}гПа".'<br>';

echo "Скорость ветра: {$parameter['wind']['speed']}м/с".'<br>';

echo "Направление ветра: {$parameter['wind']['deg']}°".'<br>';

echo "Влажность воздуха: {$parameter['main']['humidity']}%".'<br>';

?>