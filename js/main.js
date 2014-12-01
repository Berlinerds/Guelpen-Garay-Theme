/*==== MENU DESPLEGABLE ====*/

(function ($, d) {
	console.log($);
	var menu_block  = $('.menu_block');
	var toggle_out  = $('.navigation_menu a');
	var toggle_in   = $('.menu_close');
	var menu_opened = false;
	var classes = ['closed', 'opened'];
	
	var open = function (e) {
		//$(e.target).preventDefault();
		if (menu_opened === false) {
			if (menu_block.hasClass(classes[0])) {
				menu_block.toggleClass(classes[0], false);
				menu_block.toggleClass(classes[1], true);
			}
			menu_opened = true;
		} else {
			return false;
		}
	};

	var close = function (e) {
		if (menu_opened === true) {
			if (menu_block.hasClass(classes[1])) {
				menu_block.toggleClass(classes[1], false);
				menu_block.toggleClass(classes[0], true);
			}
			menu_opened = false;
		} else {
			return false;
		}
	};

	toggle_in.on('click', close);
	toggle_out.on('click', open);

	console.log(menu_block.classList);


}.call(this, jQuery, document));