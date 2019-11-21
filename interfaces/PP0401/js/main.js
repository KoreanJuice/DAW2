const toggleMenu = () => {

	const menu_bar = document.querySelector('.menu_bar');
	const menu = document.querySelector('nav');
	const menuOpen = menu.classList.contains('active');

	if (menuOpen) {
			//Close
			menu.classList.remove('active');

	} else {
			// Open
			menu.classList.add('active');
	}
};

menuIcon.addEventListener('click', () => {
	toggleMenu();
});
// const main = () => {
// 	$('.menu_bar').click(function(){
// 		$('nav').slideToggle();
// 	});
//
// 	$('.submenu').click(function(){
// 		$(this).children('.children').slideToggle();
// 	});
// }
// $(document).ready(main);
//
// const showMenu = () => {
// 	let webSize = window.matchMedia('(max-width: 1024px)');
// 	if (webSize.matches) {
// 		$('nav').css('display', 'contents');
// 	}
// }
// window.onresize = showMenu;
// $(document).ready(showMenu);
