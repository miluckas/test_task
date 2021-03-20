<?php
$year = $_POST['year'];
settype($year,"integer");
if (isset($year) and ($year>=1900) and ($year<=3000)) {      //Проверяем входные данные
    if ((($year % 4 === 0) and ($year % 100 !== 0)) or ($year % 400 === 0)) {   //Проверяем год на високосность
        echo "ДА";
    } else {
        echo "НЕТ";
    }
}
else
{
    echo "ОШИБКА ВО ВХОДНЫХ ДАННЫХ";
}