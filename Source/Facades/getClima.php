<?php

$dados = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=brasilia&appid=17f9f73aaba4220e8eac5d23ac06c2ff&units=metric"));
echo ($dados->main->temp) . "<br>";
echo ($dados->main->humidity);
