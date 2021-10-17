<?php

/* Задание 9: *Объединить две ранее написанные функции в одну,
 которая получает строку на русском языке, производит транслитерацию и 
 замену пробелов на подчеркивания (аналогичная задача решается при 
 конструировании url-адресов на основе названия статьи в блогах). */


$string = 'Объединить две ранее написанные функции в одну, 
которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания.';


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
    
    for ($i = 0; $i < mb_strlen($string); $i++) { 
      $letter = mb_substr($string, $i, 1); 
      $translit .= isset($alphabet[$letter]) ? $alphabet[$letter] : $letter;
    }
    return  preg_replace('/\s/', '_', $translit);
  }

  echo 'Результат выполнения: ' . translate($string, $alphabet);


 ?>