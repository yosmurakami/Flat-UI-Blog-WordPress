
$(document).ready(function(){
});

$(function(){
  /*
    $('#main-nav li').hover(function(){
        $("ul:not(:animated)", this).slideDown();
    }, function(){
        $("ul.sub-menu",this).slideUp();
    });
    */
    $("ul#main-nav li").hover(function(){
      $(this).children("a").css("color","#E56C6C");
      $(this).children(".sub-menu li a").css("color","white");
      $("> ul:not(:animated)" , this).animate({
        height : "toggle",
        opacity : "toggle"
      }, 450 );
    },

    function(){
      $("> ul" , this).fadeOut("slow");
      //$("> a" , this).css("color","white");
    });
});
