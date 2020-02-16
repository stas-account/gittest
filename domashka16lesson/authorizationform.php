<?php
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');
// по сути всё, но только надо посмотреть много if подряд, можно ли оптимизировать?
//
if(isset($_POST['login'], $_POST['password'], $_POST['email'])) {
	$log = $_POST['login'];
	$pas = $_POST['password'];
	$email = $_POST['email'];
	if(!empty($log) && !empty($pas) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
		setcookie('kyka', '123',time()+60);
		$_COOKIE['kyka'] = 123;
		if($_COOKIE['kyka'] == 123 || $_SERVER['REMOTE_ADDR'] == '127.0.0.2') {
			include 'adminpanel.php';
		}
		if(@$_POST['exit']) {
			setcookie('kyka', '123',time()-60);
		}
	}
	elseif(empty($log) && empty($pas) && empty($email)) {
		echo 'Заполните форму';
	}
	elseif(empty($log) || empty($pas) || empty($email)){
		echo 'Заполните все поля формы';
	}
	else {
		echo 'Неверно заполнено поле email';
	}
}  else {
	echo 'Вы не авторизованы, введите данные';
}

?>

<form action="" method="post">
	LOGIN: <input type="text" name="login">
	PASSWORD: <input type="text" name="password">
	E-MAIL: <input type="text" name="email">
	<input type="submit" name="submit">
	<input type="submit" name="exit" value="Выход">
</form>


<?php
/*


echo '<pre>'.print_r($_COOKIE,1).'</pre>';
echo '<pre>'.print_r($_GET,1).'</pre>';

if($_GET['exit']) {
	setcookie('kyka', '123',time()-3600);
} else {
	echo '';
}

if(is_null($_GET['login'])) {
	echo 'null';
} else {
	echo 'ne null';
}
setcookie('kyka', '1', time()+20);

if($_COOKIE['kyka'] == 1 || $_SERVER['REMOTE_ADDR'] == '127.0.0.1') {

echo '<pre>'.print_r($_SERVER,1).'</pre>';
}
*/
?>