<?php

/* Задание 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. 
Необходимо представить пункты меню как элементы массива и вывести их циклом. 
Подумать, как можно реализовать меню с вложенными подменю? 
Попробовать его реализовать. */

$menuArr = [  // создадим многоуровневый массив
    'item_1',
    'item_2' => ['subItem_1', 'subItem_2', 'subItem_3'],
    'item_3' => ['subItem_1' => ['another level_1', 'another level_2']]
];

function menuRender($arr)
{
    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {
        //перебираем массив
        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo menuRender($menuArr);

?>