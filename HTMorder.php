<?php
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$mydata = ['header' => 'Как сделать заказ на нашем сайте?',
    'content' => 'Это достаточно просто! Все что вам нужно это:',
    'img' => 'assets/css/images/catorder.gif'];
$data = ['Нажать кнопку корзины под выбранным котом;',
     'В форме указать ваш номер телефона и город;',
     'В течение дня получить время и координаты места, где будет наш ящик для сообщений;',
     'Прийти туда и заполнить форму заказа;', 'Все дальнейшие инструкции вы получите на месте. Таким образом мы можем полностью гарантировать анонимность наших заказчиков!'];

$template = $twig->load('HTMorder.html');
echo $twig->render('HTMorder.html', ['promodata'=>$mydata,'data'=>$data]);