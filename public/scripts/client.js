/*
*	The developer's best friend
*	@package The developer's best friend
*	Description: This application is a handy little tool to aid in the generation of lorem ipsum and random users.  
*	Version: 1.00
*	Author: Harrison DeStefano
*	Author URI: http://www.harrisondestefano.com
*/

DEVELOPERSFRIEND = {
	// let's get this party started!
	init:function(){	
		DEVELOPERSFRIEND.navigation.offcanvas();
	},
	
	// all things to do with moving around the ui
	navigation: {
		// navigation based click events captured from the ui
		interaction: function(){
			$('.nav a').on('click', function(){
				var item = $(this);
				// get the position of the current element and relate said position to the overall DOM structure. 
				if( item.parent().parent().parent().hasClass('footer-links') === true){
					itemIndx = item.parent().index() + 2;
				}
				else{
					itemIndx = item.parent().index() + 3;
				}
				// get that item and pull it into view
				DEVELOPERSFRIEND.navigation.skipTo( $('#pageWrapper').children(':nth-child('+itemIndx+')'));
			});
		},
		offcanvas: function(){
			var menu = $('#navigation-menu');
			var menuToggle = $('#js-mobile-menu');
			$(menuToggle).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle(function(){
				  if(menu.is(':hidden')) {
				    menu.removeAttr('style');
				  }
				});
			});
		}
		
	}
}