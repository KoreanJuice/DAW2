$(document).ready(main);

let navOpen = false;

function main () {
    // show/hide menus
    $('.menu_bar').click(function(){
		if (!navOpen) {
			$('nav').css({
                "display": "inline-block",
                "width": "100%"
            });
			navOpen = true;
		} else {
            $('nav').css("display", "none");
			navOpen = false;
		}
	});
    // idem submenus
    $('.submenu').click(function(){
        $(this).children('.children').slideToggle();
    });

    // fix tablet to desktop nav => display: none
    $(document).ready(function(){
        $(window).resize(function(){
            if (window.innerWidth >= 1024) {$('nav').css("display", "block");}
            else {$('nav').css("display", "none");}
        });
    });
}





























/* ////////////////////////////////////////////////////
const menu_bar = document.getElementsByClassName('.menu_bar')[0];
////////////////////////////////////////////////////
const menu_bar = document.querySelector('.menu_bar');

const toggleMenu = () => {
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

menu_bar.addEventListener('click', () => {
	toggleMenu();
});
//////////////////////////////////////////////////
const main = () => {
	$('.menu_bar').click(function(){
		$('nav').slideToggle();
	});

	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}
$(document).ready(main);
 */