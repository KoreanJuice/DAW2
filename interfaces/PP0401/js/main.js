const menu_bar = document.getElementsByClassName('.menu_bar')[0];

const toggleMenu = () => {
	const menu = document.getElementsByTagName('nav')[0];
	const menuOpen = menu.classList.contains('active');

	if (menuOpen) {
			//Close
			menu.classList.remove('active');
	} else {
			// Open
			menu.classList.add('active');
	}
};

menu_bar.addEventListener('click', () => {
	toggleMenu();
});
//////////////////////////////////////////////////////
// const menu_bar = document.querySelector('.menu_bar');
//
// const toggleMenu = () => {
// 	const menu = document.querySelector('nav');
// 	const menuOpen = menu.classList.contains('active');
//
// 	if (menuOpen) {
// 			//Close
// 			menu.classList.remove('active');
// 	} else {
// 			// Open
// 			menu.classList.add('active');
// 	}
// };
//
// menu_bar.addEventListener('click', () => {
// 	toggleMenu();
// });
//////////////////////////////////////////////////////
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
