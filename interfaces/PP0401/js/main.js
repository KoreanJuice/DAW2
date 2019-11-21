$(document).ready(main);

let open = false;

function main () {
	$('.menu_bar').click(function(){
		if (!open) {
			$('nav').animate({
				top: '10%'
			});
			contador = true;
		} else {
			contador = false;
			$('nav').animate({
				top: '-100%'
			});
		}
	});

	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}
