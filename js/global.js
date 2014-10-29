var $a = jQuery.noConflict();

$a(document).ready(function() {

// Responsive Nav
  $a(function() {  
    var pull      = $a('#pull');  
      menu        = $a('nav ul');  
      menuHeight  = menu.height();
    $a(pull).on('click', function(e) {  
      e.preventDefault();  
      menu.slideToggle();  
    });  
  });
  $a(window).resize(function(){  
    var w = $a(window).width();  
    if(w > 768 && menu.is(':hidden')) {  
      menu.removeAttr('style');  
    }  
  });

// Fit Vids
  $a("figure").fitVids();

// Popup Window for Share Buttons
	window.onload = function() {
	  document.getElementById("popup").onclick = function(){
	    return !window.open(this.href, "pop", "width=400,height=400");
	  }
	}

});