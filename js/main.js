/*==== MENU DESPLEGABLE ====*/

(function ($, d) {
	
	var menu_block  = $('.menu_block'),
		toggle_out  = $('.navigation_menu a'),
		toggle_in   = $('.menu_close'),
		menu_opened = false,
		classes = ['closed', 'opened'],
		pseudo_window = (typeof (window.Snap) != 'undefined') ? $('#content_out') : $(window),
	
	open = function (e) {
		if (menu_opened === false) {
			if (menu_block.hasClass(classes[0])) {
				menu_block.toggleClass(classes[0], false);
				menu_block.toggleClass(classes[1], true);
			}
			menu_opened = true;
		} else {
			return false;
		}
	},

	close = function (e) {
		if (menu_opened === true) {
			if (menu_block.hasClass(classes[1])) {
				menu_block.toggleClass(classes[1], false);
				menu_block.toggleClass(classes[0], true);
			}
			menu_opened = false;
		} else {
			return false;
		}
	},

	toggle = function (e) {
		if (menu_opened === true) {
			//case of opened menu which has to be closed.
			if (menu_block.hasClass(classes[1])) {
				menu_block.toggleClass(classes[1], false);
				menu_block.toggleClass(classes[0], true);
			}
			menu_opened = false;

		} else if (menu_opened === false) {
			//case of closed menu which has to be opened.
			if (menu_block.hasClass(classes[0])) {
				menu_block.toggleClass(classes[0], false);
				menu_block.toggleClass(classes[1], true);
			}
			menu_opened = true;
		}
	};

	//events on buttons
	toggle_in.on('click', close);
	toggle_out.on('click', toggle);

	//event on scroll
	var scroll_offset = 0; 
	pseudo_window.on('scroll', function (e) {
		scroll_offset++;
		if (menu_opened === true && scroll_offset >= 10) {
			close(e);
			scroll_offset = 0;
		}
	})
	
}.call(this, jQuery, document));

