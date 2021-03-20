<?php
function search_str($pr,$mass)
{
    if (is_array($mass) and is_string($pr)) {      // Проверяем данные
        $generator = fn() => yield from $mass;     // Генерируем набор значений
        $count= 0;
        foreach ($generator() as $item) {

            if (mb_strpos($item, $pr) === 0) {      // Выводим те, ктр начинаются с префиккса
                echo $item . '<br>';
                $count+=1;                          // Счетчик, если вдруг таких не окажется
            }
        }
        if ($count===0) echo "Таких строк не было";
    }
    else{
        echo "Ошибка во введенных данных";
    }
}


$massiv = [1231,'asdf','qwexvc','ertyu','qwe'];
$prefix = 'qwe';
search_str($prefix,$massiv);



