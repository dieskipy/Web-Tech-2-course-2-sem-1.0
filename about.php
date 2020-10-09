<?php
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
$promo = [
    ['img'=> '../assets/css/images/kotek-no.png',
    'header'=>'Assasin cat - котики ассасины!',
    'content'=>'Да-да, Вы не ослышались! Наша компания является мостом между котиками и убийцами, что позволяет нашим пушистым героям реализовывать себя в полной мере.'],
    ['img'=> '../assets/css/images/deadmouse.png',
        'header'=>'Если вы заказчик..',
        'content'=>'Мы гарантируем вам полную анонимность, выступая посредниками. Никто и никогда не узнает, кто навел котика на крыску, а Ваше имя будет чисто, как и работа наших агентов!'],
    ['img'=> '../assets/css/images/catweapon.png',
        'header'=>'Если Вы хотите стать нашим агентом..',
        'content'=>'Работая на нас, Вы получите множество заМУРчательных бонусов: мы сделаем Вам личную карту, подарим рабочий ноутбук (чтобы ваш хозяин не узнал о Вашей двойной жизни), а так же карту скидок в Бар "Молоковоз" для всех наших служащих!']];


$template = $twig->load('about.html');
echo $twig->render('about.html',['promo'=>$promo]);