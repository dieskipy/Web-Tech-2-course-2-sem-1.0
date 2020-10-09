<?php
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$data = [['name' => 'Люся Тихолапкина',
    'killed'=>'Джерри',
    'myimg' => 'assets/css/images/jerry.jpg',
    'num'=>3],
    ['name' => 'Лео Леон',
    'killed'=>'Кеннеди',
    'myimg' => 'assets/css/images/kennedi.jpg',
    'num'=>1],
    ['name' => 'Люся Тихолапкина',
    'killed'=>'Баттер - Вор Куриных Птенцов',
    'myimg' => 'assets/css/images/dog1.jpg',
    'num'=>3]];

$fp=fopen('assets/files/feedback.txt', 'r');
$feedback=[];
$i=0;
while (!feof($fp))
{
    $feedback[$i]['name']=fgets($fp);
    $feedback[$i]['text']=fgets($fp);
    $i=$i+1;
}
fclose($fp);
//$i=$i-1;
$template = $twig->load('review.html');
echo $twig->render('review.html', ['database'=>$data,'i'=>$i, 'reviews'=>$feedback]);


