<?php

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link rel="stylesheet" href="style.css">';
echo '<title>Your Web Page</title>';
echo '</head>';
echo '<body>';

echo "Привет, мир! Это тестовый код.";

$authorGreeting = "Привет от автора страницы!";

echo $authorGreeting;

echo '<br><img src="1613680394_5-p-fon-dlya-prezentatsii-programmirovanie-5.jpg" alt="Изображение"><br>';

$name = "Артем";
$surname = "Головин";
$age = 23;
$city = "Москва";

echo "Имя: $name, Фамилия: $surname, Возраст: $age, Город: $city";

echo '<div class="knowledge">';

// 8. Демонстрация переменных разных типов
$integerVar = 10;
$floatVar = 3.14;
$stringVar = "Это строка";
$boolVar = true;

$sum = $integerVar + $floatVar;
$concatenation = $stringVar . " и еще текст";
$comparison = ($integerVar > $age);

echo "Целое число: $integerVar, Дробное число: $floatVar, Строка: $stringVar, Логическая переменная: $boolVar";
echo "Сумма: $sum, Конкатенация: $concatenation, Сравнение: " . ($comparison ? 'true' : 'false');

echo '</div>';

echo '</body>';
echo '</html>';
?>
