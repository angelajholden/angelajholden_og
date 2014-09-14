var $a = jQuery.noConflict();

$a(document).ready(function() {

// Fancybox
  $a('.fancybox').fancybox({
    beforeShow: function () {
      this.title = $a(this.element).find("img").attr("alt"); // shows alt tag as image title
    },
    padding     : 0,
    maxWidth    : '100%',
    maxHeight   : '100%',
    width       : '560px',
    height      : '350px',
    autoSize    : true,
    closeClick  : true,
    openEffect  : 'elastic',
    closeEffect : 'elastic',
    helpers: {
      title : {
        type : 'float'
      }
    }
  });

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
  
});