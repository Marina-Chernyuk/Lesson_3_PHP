<?php

/* Задача 2: С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число. */

$number = 0;
do {
    if ($number == 0) {
        echo $number . ' – ноль' . '<br>';
        $number++;
    } else if ($number % 2 != 0) {
        echo $number . ' – нечётное число' . '<br>';
        $number++;
    } else {
        echo $number . ' – чётное число' . '<br>';
        $number++;
    }
} while ($number <= 10);

?>