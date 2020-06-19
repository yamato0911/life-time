$(function(){

      $('.advice').click(function(){
      var $advice = $(this).find('.g-answer'); 		  if($advice.hasClass('open')){
            $advice.removeClass('open');
            $advice.slideUp();
            $(this).find('span').text('+');
      } else {
            $advice.addClass('open');
            $advice.slideDown();
            $(this).find('span').text('-');
      }
      });

      // $('head').append(
      //       $(window).on("load", function() {
      //       $('body').delay(600).fadeIn("slow");
      // });

});
