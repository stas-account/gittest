<?php
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');


switch($_GET['name']) {
	case 'human':
		echo 'Человек проиграл';
		break;
	case 'computer':
		echo 'Компьютер проиграл';
	break;
}

?>

<a href="battle-of-alcoholics.php">Попробовать ещё раз</a>
