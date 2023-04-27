window.onload = function() { 

	var menu = document.querySelector('.navigation ul');
	var menuButton = document.querySelector('.menu-button');

	//show or hide the nav menu when button is clicked
	menuButton.onclick = function() {
		
		if (window.getComputedStyle(menu).display == 'none') {
			menu.style.display = 'block';
		}

		else {
			menu.style.display = 'none';
		}	
	
	}
	
	//show or hide the nav menu when window is resized / screen orientation changes
	window.onresize = function() {

		//getComputedStyle gets the latest styling, even styling that has been applied by your JavaScript
		var currentDisplay = window.getComputedStyle(menu).display;

		//If window is made wider/orientation changes and has 'none' or 'block', make it 'flex' for large screens
		if (currentDisplay !== 'flex' && window.innerWidth >= 768) {
			menu.style.display = 'flex';
		}

		//If window is made smaller/orientation and has 'flex', hide the nav menu for small screens
		if (currentDisplay == 'flex' && window.innerWidth < 768) {
			menu.style.display = 'none';
		}

	}

}
