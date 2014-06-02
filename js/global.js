$(document).ready(function() {

// Fancybox
  $('.fancybox').fancybox({
    beforeShow: function () {
      this.title = $(this.element).find("img").attr("alt"); // shows alt tag as image title
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
  $(function() {  
    var pull      = $('#pull');  
      menu        = $('nav ul');  
      menuHeight  = menu.height();
    $(pull).on('click', function(e) {  
      e.preventDefault();  
      menu.slideToggle();  
    });  
  });
  $(window).resize(function(){  
    var w = $(window).width();  
    if(w > 768 && menu.is(':hidden')) {  
      menu.removeAttr('style');  
    }  
  });

// Fit Vids
  $("figure").fitVids();
  
});