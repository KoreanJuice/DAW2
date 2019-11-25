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
