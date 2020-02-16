let containerUL = document.querySelector('.container-2 .container-ul');
let containerCarousel = document.querySelector('.container-2 .container-carousel');
//let carousel = document.querySelector('.container-2 .carousel');

let distance0 = 0;
let distance1 = 0;
let distance2 = 0;
let distance3 = 0;
let distanceArr = [distance0, distance1, distance2, distance3];

containerUL.onmousedown = function (event) {

	let a = event.target.closest('ul li a');
	let li = event.target.closest('ul li');
	let ul = event.target.closest('ul');

	if (!a) return;
	if (!containerUL.contains(a)) return;

	for (let node of containerCarousel.children) {
		node.classList.remove('active');
	}
	for (let node of ul.children) {
		node.classList.remove('active');
	}

	let i;

	if (event.target === a) {

		switch (event.target.innerHTML) {
			case 'Computer':
				i = 3;
				break;
			case 'Smartphone':
				i = 4;
				break;
			case 'Watches':
				i = 5;
				break;
			case 'Photo and Camera':
				i = 6;
				break;
		}
		li.classList.add('active');
		document.querySelector(`.container-2 .carousel:nth-child(${i})`).classList.add('active') ;
	}
};


containerCarousel.onmousedown = function (event) {

	let carouselEvent = event.target.closest('.carousel');
	if (!carouselEvent) return;
	if (!containerCarousel.contains(carouselEvent)) return;

	let i = -2;
	for (let node of containerCarousel.children) {

		if(node === carouselEvent) break;
		i++;
	}

	let mouseDown = event.clientX;
	let mouseMove;
	let x = 0;
	let width = -(carouselEvent.firstElementChild.offsetWidth);
	let validWidth = -(carouselEvent.firstElementChild.offsetWidth * (carouselEvent.childElementCount - 4));

	carouselEvent.style.transition = ``;

	function onMouseMove (event) {

		mouseMove = event.clientX;

		if (x > 0 || x < validWidth) {
			x = distanceArr[i] + (mouseMove - mouseDown)/2;
		} else {
			x = distanceArr[i] + (mouseMove - mouseDown)/2;
		}

		carouselEvent.style.transform = `translate(${x}px, 0px)`;
	}

	document.addEventListener ('mousemove', onMouseMove);

	document.onmouseup = function(event) {

		if (x > 0) {

			distanceArr[i] = 0;

		} else if (x < validWidth){

			distanceArr[i] = validWidth;

		} else {

			distanceArr[i] += (event.clientX - mouseDown)/2;
			let division = distanceArr[i] / width;
			division = Math.ceil(division);
			distanceArr[i] = width * division;
		}
		carouselEvent.style.transform = `translate(${distanceArr[i]}px, 0px)`;
		carouselEvent.style.transition = `all 500ms ease 0s`;

		document.removeEventListener('mousemove', onMouseMove);
		document.onmouseup = null;
	};

};
containerCarousel.ondragstart = function() {
	return false;
};


let iLeft = document.querySelector('.container-2 .container-carousel i:nth-child(1)');
let iRight = document.querySelector('.container-2 .container-carousel i:nth-child(2)');

containerCarousel.onclick = function (event) {

	let arrow = event.target.closest('i');


	if (!arrow) return;
	if (!containerCarousel.contains(arrow)) return;

	let width;
	let validWidth;
	let carousel;
	let i = -2;
	for (let node of containerCarousel.children) {

		if(node.className === 'carousel active') {

			width = -(node.firstElementChild.offsetWidth);
			validWidth = -(node.firstElementChild.offsetWidth * (node.childElementCount - 4));
			carousel = node;
			break;
		}
		i++
	}

	for (let node of containerCarousel.children) {

		if (node === arrow) {

			if (arrow === iLeft) {

				if (distanceArr[i] >= 0) {
					distanceArr[i] = 0;
				} else if (distanceArr[i] < validWidth) {
					distanceArr[i] = 0;
				} else {
					distanceArr[i] -=  width;
				}

			} else if (arrow === iRight) {

				if (distanceArr[i] > 0) {
					distanceArr[i] = 0;
				} else if (distanceArr[i] <= validWidth) {
					distanceArr[i] = 0;
					carousel.style.transform = `translate(${distanceArr[i]}px, 0px)`;
					carousel.style.transition = `all 1000ms ease 0s`;
					break;
				} else {
					distanceArr[i] +=  width;
				}
			}
			carousel.style.transform = `translate(${distanceArr[i]}px, 0px)`;
			carousel.style.transition = `all 500ms ease 0s`;
			break;
		}
	}
};



/*



*/