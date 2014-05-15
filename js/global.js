$(document).ready(function() {

// Fancybox
  $('.fancybox').fancybox({
    padding   : 0,
    maxWidth  : '100%',
    maxHeight : '100%',
    width   : 560,
    height    : 315,
    autoSize  : true,
    closeClick  : true,
    openEffect  : 'elastic',
    closeEffect : 'elastic'
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
  
});