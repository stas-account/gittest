

/*

function slideImg (img) {
	let image1 = document.querySelector('.container-image .image-'+img+'');
	let image2 = document.querySelector('.container-image .image-'+(img+1)+'');
	let image3 = document.querySelector('.container-image .image-'+(img-2)+'');

	if (img < 3) {
		image1.style.zIndex = '2';
		image2.style.display = 'block';
		image2.style.zIndex = '1';

		$(image1).fadeToggle(1500);

		numberImg++;

	} else if (img === 3) {
		image1.style.zIndex = '2';
		image3.style.display = 'block';
		image3.style.zIndex = '1';

		$(image1).fadeToggle(1500);

		numberImg = 1;
	}
}

function slideText (img) {
	let text1 = document.querySelector('.container-image .image-'+img+' .text-'+img+'');
	let text2 = document.querySelector('.container-image .image-'+(img+1)+' .text-'+(img+1)+'');
	let text3 = document.querySelector('.container-image .image-'+(img-2)+' .text-'+(img-2)+'');

	if (img < 3) {
		text2.style.display = 'none';

		$(text1).slideToggle(1200);

		numberText++;

	} else if (img === 3) {
		text3.style.display = 'none';

		$(text1).slideToggle(1200);

		numberText = 1;
	}
}


let delayImg = 6000;
let numberImg = 1;

let timerIdImg = setTimeout(function tick() {
	slideImg(numberImg);
	timerIdImg = setTimeout(tick, delayImg);
}, delayImg, numberImg);


let delayText = 800;
let numberText = 1;

let timerIdText = setTimeout(function tick() {
	slideText(numberText);
	timerIdText = setTimeout(tick, 6000);
}, delayText, numberText);




	let container = document.querySelector('.container-text');

	container.onmouseover = function(event) {

		let div = event.target.closest('a');
		if (!div) return;
		if (!container.contains(div)) return;

		mouseOver(div);
	};

	function mouseOver(div) {
		div.style.backgroundColor = 'red';
	}

	container.onmouseout = function(event) {

		let div = event.target.closest('a');
		if (!div) return;
		if (!container.contains(div)) return;

		mouseOut(div);
	};

	function mouseOut(div) {
		div.style.backgroundColor = '';
	}

let container = document.querySelector('.container-text');

container.onmouseover = function(event) {

	let div = event.target.closest('div');

	if (!div) return;

	if (!container.contains(div)) return;

	dropMenu2(div);
};

function dropMenu2(div) {

	div.classList.add('container-drop-menu-2');
}

function dropMenu3 () {
	this.style.color = 'blue';
	let div_aside = document.querySelector('.aside');
	div_aside.style.backgroundColor = 'red';
}
function dropMenu4 () {

}

let div_text = document.querySelectorAll('.text div');

div_text.onmouseover = dropMenu3;
div_text.onmouseout = dropMenu4;

		function myAjax() {
			var x = document.getElementById('input').value.length;
			$.ajax({
				url: '/chernovik2.php',
				type: "GET",
				cache: false,
				data: {input : x},
				success: function (msg) {
					//alert(msg);
					if (msg == 0) {
						document.getElementById('span').innerHTML = 'Логин должен содержать больше 3-х символов';
					} else if (msg == 1) {
						document.getElementById('span').innerHTML = 'Логин введён верно';
					} else if (msg == 2) {
						document.getElementById('span').innerHTML = 'Логин должен содержать меньше 10-ти символов';
					}
				}

			});
		}

	document.getElementById('input').oninput = myAjax;

	error: function (x, t, m) {
		if(t === "timeout") {
			alert('Ожидание ответа с сервера слишком велико. Возможно сайт упал.')
		} else {
			alert('Какие-то другие проблемы');
		}
	}

	window.onload = function () {
		myAjax();
		document.getElementById('send').onclick = myAjax();
	};

	var i = 0;
	while(i < 3) {
		if(++i%2) {
			console.log(i*2);
		} else {
			console.log(i+1);
		}
	}


	var i = 0;
	while(i < 3) {
		if(++i%2) {
			console.log(i*2);
		} else {
			console.log(i+1);
		}
	}

	function length() {
		var x = document.getElementById('login').value.length;
		if (x < 3) {
			alert('Вы не заполнили такое-то поле. Минимум 3 символа! Вы ввели только ' + x);
			return false;
		}
		var y = document.getElementById('pass').value.length;
		if (y < 3) {
			alert('Вы не заполнили такое-то поле. Минимум 3 символа! Вы ввели только ' + y);
			return false;
		}
	}

*/
