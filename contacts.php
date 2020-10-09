<?php
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$mydata = ['header' => 'Контакты',
    'img' => 'assets/css/images/catassassin.png'];
$data = ['Телефон: 8 800 555 35 35',
    'Адрес: улица Мяулидзе, д. 29, оф. 3',
    'Официальный представитель:', 'МУР "Не твоих собачьих дел", Евгений Котофеич',
    'Лицензия выдана от 03.2020', 'Лицензионнный номер: №33329734534MEW3249832984MR', 'Все права защищены ©'];

$template = $twig->load('contacts.html');
echo $twig->render('contacts.html', ['promodata'=>$mydata,'data'=>$data]);