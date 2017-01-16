jQuery(document).ready(function($) {
	// to top
	$(window).scroll(function () {
		if ($(this).scrollTop() > 0) {
			$('#scroller').fadeIn();
		} else {
			$('#scroller').fadeOut();
		}
	});
	$('#scroller').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
	// to top #END
	scale();
});

jQuery(window).resize(function () {
	scale();
});


function scale() {
	var elm = document.getElementById('page'); // all -- элемент, в который был обернут весь сайт
	var coeff = document.body.clientWidth / elm.offsetWidth; // считаем коэффициент масштабирования так, чтобы элемент all занял весь экран
	if (coeff > 1) coeff = 1; // нам нужно только уменьшение сайта, но не его увеличение, поэтому ограничиваем коэффициент сверху единицей
	if (coeff < 0.5) coeff = 0.5; // ограничение снизу добавлено для того, чтобы сайт совсем уж не превращался в нечитаемый
	if (coeff != 1.0) {
		if (navigator.userAgent.indexOf('Firefox') != -1) elm.style.boxShadow = 'none';  // масштабирование в Firefox порождало некорректное отображение boxshadow, и пришлось это свойство отключить
		elm.style.webkitTransform = elm.style.msTransform = elm.style.mozTransform = elm.style.transform = 'scale(' + coeff + ')'; // собственно масштабирование
	}
}