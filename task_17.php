<?php

$textStorage[] = [
    'title' =>  '$title',
    'text' => ' $text',
];

function addText(string &$title, string &$text) : void
{
    global $textStorage;
    $textStorage = ['title' => $title,  'text' => $text];

}

$title = 'Зима';
$text = 'Запорошило всё снегом';

addText($title, $text);
var_dump($textStorage);

$title_1 = 'Весна';
$text_1 = 'Грачи прилетели';

addText($title_1, $text_1);
var_dump($textStorage);


var_dump(isset($text));
var_dump(isset($text_5));

function removeText($textStorage)
{
    unset($textStorage [0]);

}
removeText($textStorage);
var_dump( 'text'[0], $textStorage);
//var_dump( 'text'[5], $textStorage); //Uninitialized string offset 5

function edit( int $postId, string $title, string $text, array &$textStorage)
{
    if (isset($textStorage[$postId])) {
        $textStorage[$postId] = [$title, $text];

return true;
           }
    return false;
}

edit(0, 'Лето', 'Всё запорошило снегом', $textStorage);


print_r($textStorage);

var_dump(edit(8, 'Осень', 'Отговорила роща золотая', $textStorage));
