<?php
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');


if(isset($_POST['submit'])) {
	$array = ['image/gif', 'image/jpeg', 'image/png'];
	$array2 = ['jpg', 'jpeg', 'gif', 'png'];

	if($_FILES['file']['error'] == 0) {
		if($_FILES['file']['size'] < 500 || $_FILES['file']['size'] > 50000000) {
			echo 'Размер изображения не подходит';
		} else {
			preg_match('#\.([a-z]+)$#iu', $_FILES['file']['name'], $matches);
			if(isset($matches[1])) {
				$matches[1] = mb_strtolower($matches[1]);

				$temp = getimagesize($_FILES['file']['tmp_name']);
				$name = './uploaded/'.date('Ymd-His').'img'.rand(10000,99999).'.jpg';

				if(!in_array($matches[1], $array2)) {
					echo 'Не подходит расширение файла';
				} elseif(!in_array($temp['mime'], $array)) {
					echo 'Не подходит тип файла, можно загружать только изображения';
				} else {
					resizeImage($_FILES['file']['tmp_name'], 100, 100, $name, $temp['mime']);
					// здесь запрос к БД и изменение столбца image
					header('Location: /');
				}
			} else {
				echo 'Данный файл не является картинкой. Принимаемые файлы: jpg, png, gif';
			}
		}
	}
}

echo '<br>FILES';
wtf($_FILES,1);
echo '$TEMP';
wtf($temp,1);
echo 'POST';
wtf($_POST,1);




















/*

$array = [4, 4, 4, 4, 3, 3, 3];
echo '<pre>'.print_r($array,1).'</pre>';

foreach($array as $k=>&$v) {
	$v = $v * 2;
	$k = $k * 2;
	echo $k;
}

echo '<pre>'.print_r($array,1).'</pre>';



class Test {
	public $x = 1;
}
$t1 = new Test;
$t2 = new Test;
$t1->x = 3;
$t2->x = 3;
echo ($t1->x + $t2->x);
echo '<br>';
echo $t1->x;
echo '<br>';
echo $this->x;



session_start();
$_COOKIE['login'] = $_GET['login'];
echo '<pre>';
echo 'SESSION: '.print_r($_SESSION,1);
echo 'GET: '.print_r($_GET,1);
echo 'POST: '.print_r($_POST,1);
session_unset();
session_destroy();

echo '<pre>'.print_r($_ENV,1).'</pre>';

print_r(getenv());

echo '<pre>'.print_r(getenv(),1).'</pre>';
*/