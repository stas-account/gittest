<?php
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');

$array = isset($_GET['link']) ? scandir('./'.$_GET['link']) : scandir('.');
unset($array[0], $array[1]);
foreach($array as $value) {

	if(is_dir(isset($_GET['link']) ? './'.$_GET['link'].'/'.$value : $value)) {
		echo '<a href="filemanager.php?link='.$value.'"><img src="/img/Значок-папки.png" alt="">',$value,'</a>','<br>';

	} else {
		echo '<img src="/img/Значок-файла.png" alt="">',$value,'<br>';
	}
}

/*
echo 'GET: <pre>'.print_r($_GET,1).'</pre>';

if(is_dir('/ospanel/domains/test1.ru/domashka16lesson/new')) {
	echo 'папка';
} else {
	echo 'файл';
}

echo '<pre>',print_r(scandir('/ospanel/domains'),1),'</pre>';

echo 'GET: <pre>'.print_r($_GET,1).'</pre>';

echo '<pre>',print_r(scandir('/ospanel/domains/test1.ru'),1),'</pre>';

 */


