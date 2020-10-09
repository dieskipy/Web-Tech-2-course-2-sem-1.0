<?php
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
$num = $_GET['num'];

$mydata = [['name' => 'Васек Нападун',
    'info' => 'Васек Нападун - лучший шпион-убийца в своем роде! Имеет пушистый мех с рыжинкой и похож на солнечного зайчика от оптики винтовки - он так же быстр и будет последним, что вы увидите в своей жизни. Его маленькие лапки дают ему +100 к тихости: посмотрите, даже другой кот его не услышал!',
    'img' => 'assets/css/images/catprof1.jpg'],
    ['name' => 'Лео Леон',
        'info' => 'Знаете о фильме Люка Бессона "Леон"? Так вот наш Лео был вдохновлен произведением французского режиссера еще маленьким котенком! Он буквально за три года выучился пользоваться всеми видами огнестрельных оружий, а также знает парочку приемов с использованием холодного оружия. Если вам нужно пафосное убийство с глушителем - Лео Леон ваш лучший вариант!',
        'img' => 'assets/css/images/catprof2.jpg'],
    ['name' => 'Злой Егорка',
        'info' => 'Самый импульсивный наш работник, но он мастер холодного оружия. Превосходно обращается с кинжалами, а так же он смертельно быстр, прямо как тот казах из заshitников!',
        'img' => 'assets/css/images/catprof3.jpg'],
    ['name' => 'Люся Тихолапкина',
        'info' => 'Чрезвычайно тихая особа с маленькими лапками, бывшая балетная кошечка. Хороша в рукопашком бою, предпочитаемое оружие - холодное и так называемое "гасило". Работает незаметно, а своими кинжалами может оставлять следы снайперской винтовки.',
        'img' => 'assets/css/images/catprof4.jpg'],
    ['name' => 'Леха "Бегемот"',
        'info' => 'Леха старомоден. Предпочитает использовать старый дедушкин браунинг и армейский нож. Его крайне известный дед передал ему удивительный талант: Леха может стрелять как угодно и никогда не промахивается! А еще он починяет примусы.',
        'img' => 'assets/css/images/catprof5.jpeg'],
    ['name' => 'Серега "Базука"',
        'info' => 'Знаете о человеке-оркестре? Ну так вот Серега - это кошара - ракетная-утановка. Дайте этому коту неограниченный доступ к гранатомету и он разнесет все на своем пути. Использовать только в крупных военных операциях!',
        'img' => 'assets/css/images/catprof6.jpg']];
$finaldata = $mydata[$num];
$template = $twig->load('cat1.html');
echo $twig->render('cat1.html', ['mydata'=>$finaldata]);