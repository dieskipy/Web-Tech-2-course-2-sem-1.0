<?php
//кодуля к поиску и замене ссылок
$fp=fopen('assets/files/feedback.txt', 'a');
$name='';
$text ='';

if(isset($_POST['name'])) $name = $_POST['name'].chr(13).chr(10);
if (isset($_POST['text'])) $text = $_POST['text'].chr(13).chr(10);
$regexp='/[(\r\n)(\n)(\r)(\n\r)]/';
$text=preg_replace($regexp,' ', $text);

$regexp = '~(https?:\/\/(?!assassin\.cats)(?:[\w]*\.)(?!assassin\.cats)[\w.\-\=\?\/\&]*)~';
$text = preg_replace($regexp, '#Внешние ссылки запрещены#',$text);

fwrite($fp,$name);
fwrite($fp,$text);

fclose($fp);
header('Location: review.php');
exit();