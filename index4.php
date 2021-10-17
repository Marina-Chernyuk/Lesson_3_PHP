<?php

/* Задание 4: Объявить массив, индексами которого являются буквы русского языка, 
а значениями – соответствующие латинские буквосочетания 
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк. */


$string = 'Объявить массив, индексами которого являются буквы русского языка, 
а значениями – соответствующие латинские буквосочетания.';


$alphabet = [
    'а' => 'a', 'б' => 'b', 'в' => 'v',
    'г' => 'g', 'д' => 'd', 'е' => 'e',
    'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'й' => 'y', 'к' => 'k',
    'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'h', 'ц' => 'c',
    'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
    'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
    " " => " "
  ];
  
  function translate($string, $alphabet)
  {
    $translit = '';
    
    for ($i = 0; $i < mb_strlen($string); $i++) { //mb_strlen — получаем длину строки
      $letter = mb_substr($string, $i, 1); //mb_substr — возвращает часть строки
      $translit .= isset($alphabet[$letter]) ? $alphabet[$letter] : $letter;
    }
    return $translit;
  }

  echo 'Исходная строка: ' . $string . '<br>';
  echo 'Результат транслитерации: ' . translate($string, $alphabet);

?>