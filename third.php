<?php

function amount($n, $m)
{
    if (is_int($n) and is_int($m) and ($n>0) and ($m>=0)) {
        $ans = intdiv($m, $n);
        return "Количество хипстеров - $n <br>Количество смузи - $m<br> Ответ - $ans";
    }
    else{
        return 'Ошибка во входных данных';
    }
}


$n = 7; // Количество хипстеров
$m = 15; // Количество смузи

echo amount($n,$m);
