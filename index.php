<?php
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
$promo = ['img'=> 'assets/css/images/kotek-no.png',
    'header'=>'Assasin cat - котики ассасины!',
     'content'=>'Мы являемся первым в мире сайтом, предлагающим услуги котов-убийц! Если вам нужно самое непредсказуемое убийство с самым милым исполнителем - что ж, вы пришли по адресу!
    '];
$database = [['name' => 'Васек Нападун',
               'myimg' => 'assets/css/images/catprof1.jpg',
               'num'=>0],
            ['name' => 'Лео Леон',
             'myimg' => 'assets/css/images/catprof2.jpg',
                'num'=>1],
            ['name' => 'Злой Егорка',
             'myimg' => 'assets/css/images/catprof3.jpg',
                'num'=>2],
    ['name' => 'Люся Тихолапкина',
        'myimg' => 'assets/css/images/catprof4.jpg',
        'num'=>3],
    ['name' => 'Леха "Бегемот"',
        'myimg' => 'assets/css/images/catprof5.jpeg',
        'num'=>4],
    ['name' => 'Серега "Базука"',
        'myimg' => 'assets/css/images/catprof6.jpg',
    'num'=>5]];
$template = $twig->load('index.html');
echo $twig->render('index.html', ['promodata'=>$promo, 'database'=>$database]);