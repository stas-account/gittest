<?php
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');


if($_GET['input'] < 3) {
	echo 0;
} elseif(($_GET['input'] >= 3 && $_GET['input'] <= 10)) {
	echo 1;
} else {
	echo 2;
}



