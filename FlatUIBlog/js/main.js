
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
      $("> ul:not(:animated)" , this).animate({
        height : "toggle",
        opacity : "toggle"
      }, 450 );
      $(this).children("a").css("color","#1ABC9C");
      $(this).children(".sub-menu li a").css("color","#1ABC9C");
    },

    function(){
      $("> ul" , this).fadeOut("slow");
      $("> a" , this).css("color","#5E5E5E");
    });
});
