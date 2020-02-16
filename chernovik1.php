<?php
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');

//ЗДЕСЬ ТОЛЬКО КОД PHP, ОСТАВЛЯТЬ ВСЕ ЧЕРНОВИКИ
/*

$numrows = ceil($res->num_rows/10);

if (!isset ($_GET['key1'])) {

	if($numrows <= 5) {

		for($number = 1; $number <= $numrows; $number++) { ?>
			<a href="/goods/home/<?php echo $number; ?>"><?php echo $number; ?></a>
		<?php }

	} elseif($numrows > 5) {

		for($number = 1; ; $number++) {
			if($number == 4) { ?>
				<a href="#">...</a>
			<?php } elseif($number == 5) { ?>
				<a href="/goods/home/<?php echo $numrows; ?>"><?php echo $numrows; ?></a>
			<?php break; } ?>
			<a href="/goods/home/<?php echo $number; ?>"><?php echo $number; ?></a>
		<?php }

	}
}

if (isset ($_GET['key1'])) {


		switch($_GET['key1']) {

			case 1:
				header("Location: /goods/home");
				exit;
				break;
			case 2:

		}

}


$array = [
	'text@',
	'yandex@@mega.com',
	'beer@mail.com',
	"inpost.dp.ua",
	"inpostdpua@gmail.com"
];

foreach($array as &$v) {
	$v = preg_match('#[\w-]+@[\w-]+.[\w]+#u',$v, $matches);
	if($v) {
		echo 'true';
	} else {
		echo 'false';
	}
	echo '<pre>'.print_r($matches,1).'</pre>';
}
//echo '<pre>'.print_r($array,1).'</pre>';

$q = [
	'Проверить на валидность е-мейла. Краткая информация (ВАЖНАЯ!), емеил состоит из набора символов маленьких.
	 Присутствует в центре собака, слева имя ящика, которое может состоять из обычных символов англ И тире.
	 Справа находятся домены, отделенные точками.',
];


$array = [
	'Ваш логин: Inpost. Добро пожаловать',
	'Ваш логин: Николай. Добро пожаловать',
	'Ваш логин: Анна Семинович. Добро пожаловать',
	'Ваш логин: Борис_Бурда-2. Добро пожаловать',
];

foreach($array as $v) {
	$res = preg_match('#:\s([\w\s-]*)#u', $v, $matches);
	if($res) {
		echo 'true';
	} else {
		echo 'false';
	}
	echo '<pre>'.print_r($matches,1).'</pre>';
}

$array = [
	'main',
	'READ',
	'news"&\\/files',
	'../../index',
	'news',
	'kill_crash-and-destroy',
	'loveYou',
];

foreach($array as $v) {
	$res = preg_match('#^[a-z-]+$#ui', $v, $matches);
	if($res) {
		echo 'true';
	} else {
		echo 'false';
	}
	echo '<pre>'.print_r($matches,1).'</pre>';
}

$array = [
	'file.jpg',
	'zzz.png',
	'afafaf.php',
	'quad.jpg.',
	'quad2.JPG',
	'quad3.jpg.vir',
	'gif.sdfsd',
	'file.virus',
];

foreach($array as $v) {
	$res = preg_match('#[a-z-]+\.(gif|png|jpg)$#u', $v, $matches);
	if($res) {
		echo 'true';
	} else {
		echo 'false';
	}
	echo '<pre>'.print_r($matches,1).'</pre>';
}

$array = [
	'Длинная строка. Главное, что мы научимся с ней идеально работать.  HOW do you do? Вот так и живём.Классно!',
];

'#\w{2,}#ui'
'#[a-z]{2,}#ui'
'#\.[\w\s]*#ui'
'#^(.{5})#ui'
'#[A-ZА-Я][\w]*#u'

$array = [
	'10 , 22, 2.1, 2.5, 10.10, 500.1, 77, 10.11.12.13',
];

foreach($array as $v) {
	$res = preg_match_all('#[^\.]\d+\.\d+[^\.]#u', $v, $matches);
	if($res) {
		echo 'true';
	} else {
		echo 'false';
	}
	echo '<pre>'.print_r($matches,1).'</pre>';
}

foreach($array as &$v) {
	$res = preg_match('#.*http://#u', $v, $matches);
	if($res) {
		echo 'true';
	} else {
		$v = 'http://'.$v;
		echo 'false';
	}
	$res1 = preg_match('#[^\s_]+(\.ru|\.com|\.ua)$#u', $v, $matches);
	if($res1) {
		echo 'true';
	} else {
		$v = $v.'.ru';
		echo 'false';
	}
	echo '<pre>'.print_r($matches,1).'</pre>';
}

echo '<pre>'.print_r($array,1).'</pre>';


'#^\d+$#u'
'#^[7фя]+$#u'
'#[-a-zа-яё_\s]{4,15}#ui'
'#m[a-z]+x#ui'

foreach($array as &$v) {
	$v = preg_replace('#\s+#ui',' ', $v);
	if($v) {
		echo 'true';
	} else {
		echo 'false';
	}
	//echo '<pre>'.print_r($matches,1).'</pre>';
}
echo '<pre>'.print_r($array,1).'</pre>';

foreach($array as &$v) {
	$v = preg_match('#:(\d{1,2}\s\w{3,15}\s\d{2}:\d{2})#ui',$v, $matches);
	if($v) {
		echo 'true';
	} else {
		echo 'false';
	}
	echo '<pre>'.print_r($matches,1).'</pre>';
}

function hc ($el) { // HtmlSpecialCharsAll
	if(!is_array($el)) {
		$el = htmlspecialchars($el);
	} else {
		$el = array_map('hc', $el);
	}
	return $el;
}

foreach($array as &$v) {
	$v = preg_match('#<a\s*href\s*=\s*[\'\"]*([\w\.]+)[\'\"]*#ui',$v, $matches);
	if($v) {
		echo 'true';
	} else {
		echo 'false';
	}
	echo '<pre>'.print_r(hc($matches),1).'</pre>';
}

foreach($array as &$v) {
	$v = preg_match('#[\w-]+@[\w-]+.[\w]+#u',$v, $matches);
	if($v) {
		echo 'true';
	} else {
		echo 'false';
	}
	echo '<pre>'.print_r($matches,1).'</pre>';
}


$array = ['3g2434dd','4r4jhjh','1dfjsld',3.1,4.2,2.3,2];

function IntAll($el) {
	if(!is_array($el)) {
		$el = (int)$el;
	} else {
		$el = array_map('IntAll', $el);
	}
	return $el;
}


$array = IntAll($array);

echo '<pre>'.print_r($array,1).'</pre>';


echo time();
echo '<br>';
echo date('D, d M Y H:i:s');
echo '<br>';
echo rand(1, 10);
echo '<br>';

$var = ['beer', 'meat', 'street'];
print_r($var);
include 'resize-image.php';
$array = ['beer', 'meat', 'strawberry'];
echo '<br>';
echo count($array);
echo '<br>';
$y = '54dfdf4343';
$y = (int)$y;
echo $y;
echo '<br>';
include_once 'resize-image.php';
$x = 4.4;

if (is_real($x)) {
	echo 'да это так';
} else {
	echo 'нет неверно';
}

echo '<br>';
var_dump($x);
echo '<br>';
print_r($x);
echo '<br>';


 define ('CONSTANTA','2017');

if (date('Y') == CONSTANTA) {
	echo CONSTANTA;
} else {
	echo CONSTANTA.' - '.date('Y');
}

echo date('Y');
echo '<pre>'.print_r($_GET,1).'</pre>';
if(isset($_GET['page'])) {
	echo '<h1>'.$_GET['page'].'</h1>';
}

$text = 'sldfjsldkj0890';
echo md5($text);

$ids[] = 1;
$ids[] = 2;
$ids[] = 3;

$ids = implode(' , ', $ids);

var_dump($ids);
echo '<pre>'.print_r($ids,1).'</pre>';

echo '<pre>'.print_r($_GET,1).'</pre>';


$x = 1;
echo 'trololo'. $x === 1 ? 1 : 2 .'lala';

echo '<br>';

print print print 9;

echo '<br>';

print print 2;

$_GET['page'] = 'page1';

if($_GET['page'] == 'page1') {
	echo 'true';
} else {
	echo 'false';
}
echo '<pre>'.print_r($_GET,1).'</pre>';

|| - возвращает всегда boolean
$a = 0 || print 'вот так да';
echo '<br>';
echo $a;
echo '<br>';
var_dump($a);

echo '<div style="border-top:black solid 3px; height:10px;"></div>';

$b = false or print ('вот так да');
echo '<br>';
echo $b;
echo '<br>';
var_dump($b);

$a = 0 || 0;
var_dump($a);
echo '<br>';
echo $a;
echo '<br>';
$b = 2 or 3 ;
var_dump($b);
echo '<br>';
echo $b;
echo '<br>';

$a =  3 || 2 ;
var_dump($a);
echo '<br>';
echo $a;
echo '<br>';
$b = 3 or 2 ;
var_dump($b);
echo '<br>';
echo $b;
echo '<br>';

$x = 5;
$y = 4;

if ( $x>3) {
	if (empty($x)) {
		function fuv ( $a,$b) {
			$a = 3;
			$b = 4;
		}
	} else {
		echo 'не равно';
	}
}



echo '<table border="1" cellpadding="50">';
for ( $y = 1; $y <= 3; ++$y) {
	echo '<tr>';
	for ( $x = 1; $x <= 5; ++$x) {
		if ( $y == 1 && $x == 2) {
			echo '<td style="background:green">'.$x.'</td>';
			continue;
		} elseif( $y == 2 && $x == 1 || $y == 2 && $x == 4) {
			echo '<td style="background:yellow">'.$x.'</td>';
			continue;
		} elseif( $y == 3) {
			echo '<td style="background:red">'.$x.'</td>';
			continue;
		}
		echo '<td>';
		echo $x;
		echo '</td>';
	}
	echo '</tr>';
}
echo '</table>';

echo '<table border="1">';
echo '<tr>';
for ( $x = 1; $x <= 5; ++$x) {
	echo '<td>';
	echo $x;
	echo '</td>';
	if ($x == 2) {
		echo '<td style="background:yellow">';
		echo '</td>';
	}
}
echo '</tr>';
echo '<tr>';
for ( $x = 1; $x <= 5; ++$x) {
	echo '<td>';
	echo $x;
	echo '</td>';
}
echo '</tr>';
echo '<tr style="background:red">';
for ( $x = 1; $x <= 5; ++$x) {
	echo '<td>';
	echo $x;
	echo '</td>';
}
echo '</tr>';
echo '</table>';

echo '
<table>
	<tr>
		<td> первая ячейка</td>
		<td> первая ячейка</td>
		<td> первая ячейка</td>
		<td> первая ячейка</td>
	</tr>
	<tr>
		<td> вторая ячейка</td>
		<td> вторая ячейка</td>
		<td> вторая ячейка</td>
		<td> вторая ячейка</td>
	</tr>
	<tr>
		<td> первая ячейка</td>
		<td> первая ячейка</td>
		<td> первая ячейка</td>
		<td> первая ячейка</td>
	</tr>

</table>
';

$i = 0;
$x = 1;
while($i++ < 5) {
	if($i == 1 || $i == 3) {
		$x *= 2;
	} elseif($i == 2 || $i == 4) {
		$x += 1; // $x = 7
	}
}
echo $x;

$x = '44';

if ( !empty($x)) {
	echo 'true';
} else {
	echo 'false';
}

$q = [
	'Britain' => 'London',
	'Germany' => 'Berlin',
	'Italy' => 'Roma',
	'France' => 'Paris',
	'Russia' => 'Moscow'
];

foreach ($q as  $z) {
	if ($z == 'Roma') {
		continue;
	}
	echo $z;
}

foreach ( $q as $p => $i ) {
	echo $i.', ';
	if ( $q['Russia']) {
		echo $i.' ';
	}
}

$names = ['Вася','Петя','Илона','Даша'];
echo 'В нашем доме живут: ';
foreach($names as $x => $y) {
	echo $y.', ';
}

for($x = 1; $x <= 5; ++$x) {
	echo '<div style="display:inline-block">';
	for($y = 1; $y <= 10; ++$y) {
		echo $x.':'.$y.'<br>';
	}
	echo '</div>';
}

$x = 20;
$y = 10;
$y += $x;
echo $y;
echo '<br>';
for ($i = 1; $i <= 10; print $i, $i++)

for ( $x = 1; $x <= 10; ++$x) {
	echo $x;
}

$x = 8;

do {
	echo $x;
	++$x;
} while ( $x < 10);

$i = 1;
$x = 1;
echo '<table border="1" cellpadding="5">';
while($i < 4) {
	echo '<tr>';
	do {

		echo '<td>'.$x++.'</td>';
	} while ( $x < 10);

	echo '</tr>';
	echo $i++;
	echo $i;
	$x = 1;
}
echo '</table>';

while($x = 1) {
	echo '<td>'.$x.'</td>';
	break;
}
while($x < 10) {
	echo '<td>'.++$x.'</td>';
}

$i = 1;
$x = 1;
while($i < 4) {
	while($x < 10) {
		echo $x;
		++$x;
	}
	echo $i;
	++$i;
	echo $i;
	$x = 11;
}

$i = 1;
echo '
<table border="1" cellpadding="10">
  <tr>';
while($i < 4) {
	echo '<td>1:'.$i.'</td>';
	++$i;
}
echo '</tr>
<tr>
	<td>2:1</td>
	<td>2:2</td>
	<td>2:3</td>
</tr>
<tr>
	<td>3:1</td>
	<td>3:2</td>
	<td>3:3</td>
</tr>
<tr>
	<td>4:1</td>
	<td>4:2</td>
	<td>4:3</td>
</tr>
</table>
';

$x = 1;
echo '<table border="1">';
echo '<tr>';
while ( $x <= 10) {
	echo '<td>';
	echo $x;
	++$x;
	echo '</td>';
}
echo '</tr>';
echo '</table>';

$x = 1;
while($x == 1 || $x == 2 || $x == 3) {
	echo 'Переменная равна<br>';
	++$x;
	echo $x.'<br>';
}
echo $x;

$y = 'text';
$x = [
	"key" =>"32",
	"key1" =>'baby',
	"key2" =>'metal',
	"key3" => ['su-metal', 'yui-metal', 'moa-metal']
];
echo '<pre>'.print_r($x,1).'</pre>';
echo '<pre>';
var_dump($x);
echo '</pre>';
$z = [
	'a',
	'b',
	'c'
];
$z[3]= 'd';
print_r($z);
unset($z[0]);
echo '<pre>'.print_r($x,1).'</pre>';
unset($x['key3'][1]);
$x['key3'][1] = '5 monkeys';
echo '<pre>'.print_r($x,1).'</pre>';

$x = '2';
$y = 'text';

switch ($x) {
	case (is_int($x)):
		echo 'number';
		break;
	case '3':
		echo ' true';
		break;
	case ($x == 3):
		echo " bolshe";
		break;
	default:
		echo " neverno";

}

$x = '';
$y = 'baby';

if ( !empty($x)) {
	echo 'пустая';
} else {
	echo 'не пустая';
}

if ( !(1 == 2)) {
	echo 'true';
} else {
	echo 'false';
}

$x = 3;
$y = 'Зелёный слоник';
if (isset($y)) {
	echo $y;
} else {
	echo 'Не существует';
}

$login = 'login';
$pass = 'pass';

if ( $login == 'login' || $pass == 'pass') {
	echo 'Вы авторизованы';
}
else {
	echo 'Вы не авторизованы';
}

$x = 11;
$y = 11;

if ( $x == $y) {
	echo 'Сравнение числовое';
}
if ( $x === $y) {
	echo 'Сравнение типовое';
}

$x = false;

if ($x) {
	echo 'true';
}
else {
	echo 'false';
}

$x = 4;
$y = 3;
$z = false;

if ($x > $y) {
	true;
	echo 'true';
} else {
	echo $z.'false';
}

$names = array('Вася','Петя','Илона','Даша');

echo 'В нашем дому живут: ';

foreach($names as $k=>$v) {
	if($v == 'Илона') {
		break;
	}
	echo $v.', ';
	if ($v == 'Даша') {
		echo $v.'.';
	}
}


$names = array('Вася','Петя','Илона','Даша');

echo 'В нашем дому живут: ';

foreach($names as $k=>$v) {
	echo $names[$k].', ';
}

$names = array('Вася','Петя','Илона','Даша');

echo 'В нашем дому живут: ';

foreach($names as $k=>$v) {
	echo $v.', ';
}

$names = array('Вася','Петя','Илона','Даша');

echo '<pre>'.print_r($names,1).'</pre>';

echo 'В нашем дому живут: ';

foreach($names as $k=>$v) {
	echo 'Ключ у нас = '.$k.', А значение = '.$v.'<br>';
}

echo 'В нашем дому живут: ';

foreach($names as $k=>$v) {
	echo $v.', ';
}

$names = array('Вася','Петя','Илона','Даша');
echo '<pre>'.print_r($names,1).'</pre>';

echo 'Перед циклом<br>';
for($x = 1; $x <= 5; ++$x) {
	for($y = 1; $y <= 10; ++$y) {
		echo $x.':'.$y.'<br>';
	}
}
echo 'После цикла';

echo 'Перед циклом<br>';
for($x = 1; $x <= 20; ++$x) {
	echo $x.'<br>';
}
echo 'После цикла';

$x = 1;
echo 'Перед циклом<br>';
do {
	echo $x.'<br>';
	++$x;
} while ($x < 9);
echo 'После цикла';

$i = 1;
$x = 1;
while($i < 4) {
	while($x < 10) {
		echo $x;
		++$x;
	}
	echo $i;
	++$i;
	$x = 1;
}

$i = 1;
$x = 1;
echo '<table>';
while($i < 4) {
	echo '<tr>';
	while($x < 10) {
		echo '<td></td>';
	}
	echo '</tr>';
	echo $i;
	++$i;
	$x = 1;
}
echo '</table>';
*/




