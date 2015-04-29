var $a = jQuery.noConflict();

$a(document).ready(function() {

// Responsive Nav
  $a(function() {  
    var pull      = $a('a#pull');  
      menu        = $a('.mainMenu ul');  
      menuHeight  = menu.height();
    $a(pull).on('click', function(e) {  
      e.preventDefault();  
      menu.slideToggle();  
    });  
  });
  $a(window).resize(function(){  
    var w = $a(window).width();  
    if(w > 1024 && menu.is(':hidden')) {  
      menu.removeAttr('style');  
    }  
  });

// Fit Vids
  $a("figure").fitVids();

// Smooth Scrolling
// $('a[href*=#]:not([href=#])').not('#myCarousel a').click(function() {
// https://css-tricks.com/snippets/jquery/smooth-scrolling/#comment-1584376
$a(function() {
  $a('a[href*=#]:not([href=#])').not('#tabs a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $a(this.hash);
      target = target.length ? target : $a('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $a('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

// Instafeed
//$a(function() {
//	var feed = new Instafeed({
//    get: 'tagged',
//    tagName: 'sheltie',
//    clientId: '5baf313b970847e69b2f5ce2b65300de',
//    limit: 12
//	});
//	feed.run();
//});

// jQuery UI
$a( "#accordion" ).accordion({
      collapsible: true,
      active: false,
      heightStyle: "content"
});

$a( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$a( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );

// jquery.popupWindow.js (http://swip.codylindley.com/popupWindowDemo.html)
(function($){ 		  
	$.fn.popupWindow = function(instanceSettings){
		
		return this.each(function(){
		
		$(this).click(function(){
		
		$.fn.popupWindow.defaultSettings = {
			centerBrowser:0, // center window over browser window? {1 (YES) or 0 (NO)}. overrides top and left
			centerScreen:0, // center window over entire screen? {1 (YES) or 0 (NO)}. overrides top and left
			height:500, // sets the height in pixels of the window.
			left:0, // left position when the window appears.
			location:0, // determines whether the address bar is displayed {1 (YES) or 0 (NO)}.
			menubar:0, // determines whether the menu bar is displayed {1 (YES) or 0 (NO)}.
			resizable:0, // whether the window can be resized {1 (YES) or 0 (NO)}. Can also be overloaded using resizable.
			scrollbars:0, // determines whether scrollbars appear on the window {1 (YES) or 0 (NO)}.
			status:0, // whether a status line appears at the bottom of the window {1 (YES) or 0 (NO)}.
			width:500, // sets the width in pixels of the window.
			windowName:null, // name of window set from the name attribute of the element that invokes the click
			windowURL:null, // url used for the popup
			top:0, // top position when the window appears.
			toolbar:0 // determines whether a toolbar (includes the forward and back buttons) is displayed {1 (YES) or 0 (NO)}.
		};
		
		settings = $.extend({}, $.fn.popupWindow.defaultSettings, instanceSettings || {});
		
		var windowFeatures =    'height=' + settings.height +
								',width=' + settings.width +
								',toolbar=' + settings.toolbar +
								',scrollbars=' + settings.scrollbars +
								',status=' + settings.status + 
								',resizable=' + settings.resizable +
								',location=' + settings.location +
								',menuBar=' + settings.menubar;

				settings.windowName = this.name || settings.windowName;
				settings.windowURL = this.href || settings.windowURL;
				var centeredY,centeredX;
			
				if(settings.centerBrowser){
						
					if ($.browser.msie) {//hacked together for IE browsers
						centeredY = (window.screenTop - 120) + ((((document.documentElement.clientHeight + 120)/2) - (settings.height/2)));
						centeredX = window.screenLeft + ((((document.body.offsetWidth + 20)/2) - (settings.width/2)));
					}else{
						centeredY = window.screenY + (((window.outerHeight/2) - (settings.height/2)));
						centeredX = window.screenX + (((window.outerWidth/2) - (settings.width/2)));
					}
					window.open(settings.windowURL, settings.windowName, windowFeatures+',left=' + centeredX +',top=' + centeredY).focus();
				}else if(settings.centerScreen){
					centeredY = (screen.height - settings.height)/2;
					centeredX = (screen.width - settings.width)/2;
					window.open(settings.windowURL, settings.windowName, windowFeatures+',left=' + centeredX +',top=' + centeredY).focus();
				}else{
					window.open(settings.windowURL, settings.windowName, windowFeatures+',left=' + settings.left +',top=' + settings.top).focus();	
				}
				return false;
			});
			
		});	
	};
})(jQuery);

// Initialize Popup Window
$a('.share').popupWindow({ 
	height:500, 
	width:570,
	centerScreen:1,
	scrollbars:0
	}); 

});