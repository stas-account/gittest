<?php
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');
session_start();

if($_SESSION['xp1'] <= 0 || $_SESSION['xp2'] <= 0) {
	unset($_SESSION['xp1'], $_SESSION['xp2'], $_GET['submit']);
}

if(!isset($_SESSION['xp1'])) {
	$_SESSION['xp1'] = 10;
	$_SESSION['xp2'] = 10;
}

$comp = rand(1,3);

if(isset($_GET['number1']) && !empty($_GET['number1'] && isset($_GET['submit']))) {
	switch($_GET['number1']) {
		case $comp:
			$_SESSION['xp1'] -= rand(1,4);
			if($_SESSION['xp1'] <= 0){
				header('Location: http://test1.ru/domashka16lesson/battle-of-alcoholics2.php?name=human');
				exit;
			}
			break;
		default:
			$_SESSION['xp2'] -= rand(1,4);
			if($_SESSION['xp2'] <= 0){
				header('Location: http://test1.ru/domashka16lesson/battle-of-alcoholics2.php?name=computer');
				exit;
			}

	}
}
echo'<pre>','XP Human ',$_SESSION['xp1'],'        ','XP Computer ',$_SESSION['xp2'],'</pre>';
echo'<pre>','Number Human ',@$_GET['number1'],'        ','Number Computer ',$comp,'</pre>';
?>
<form action="" method="get">
	Выберите число<br>
	<select size="1" name="number1">
		<option>1</option>
		<option>2</option>
		<option>3</option>
	</select>
	<input type="submit" name="submit">
</form>
<?php

/*

echo '<pre>','$_SESSION ',print_r($_SESSION,1),'</pre>';
echo '<pre>','$_GET ',print_r($_GET,1),'</pre>';
echo '<pre>','$_COOKIE ',print_r($_COOKIE,1),'</pre>';

echo'<pre>','human ',$_GET['number1'],'        ','computer ',$comp,'</pre>';

echo'<pre>','XP1 ',$_SESSION['xp1'],'        ','XP2 ',$_SESSION['xp2'],'</pre>';



function xp1($z=10) {

}
function xp2($d=10) {

}

for($_SESSION['xp1'] = 10, $_SESSION['xp2'] = 10; $_GET['number1']; if($_GET['number1'] == $comp) $_SESSION['xp2'] -= rand(1,4);)

 */
?>