// center the skills logo as background taking into account the size of the skills panel itself
( function( $ ) {
  $(document).ready(function(){
    let thisSkillNowHeight = $('.this-skill-now').height();
    let skillBackgroundWidth = $('.skillBackground').width();
    let skillBackgroundHeight = $('.skillBackground').height();
    if (thisSkillNowHeight >= skillBackgroundHeight) {
      if ($('.this-skill-now').width() >= skillBackgroundWidth) {
        $('.skillBackground').css({
          "left":`calc(50% - ${skillBackgroundWidth/2}px)`,
          "left":`-webkit-calc(50% - ${skillBackgroundWidth/2}px)`,
          "top":`calc(50% - ${skillBackgroundHeight/2}px)`,
          "top":`-webkit-calc(50% - ${skillBackgroundHeight/2}px)`
        });
      } else {
        $('.skillBackground')
        .css(
          {"width":`calc(${$('.this-skill-now').width()}px - 2rem)`},
          {"width":`-webkit-calc(${$('.this-skill-now').width()}px - 2rem)`}
        );
        skillBackgroundWidth = $('.skillBackground').width();
        skillBackgroundHeight = $('.skillBackground').height();
        $('.skillBackground').css({
          "left":`calc(50% - ${skillBackgroundWidth/2}px)`,
          "left":`-webkit-calc(50% - ${skillBackgroundWidth/2}px)`,
          "top":`calc(50% - ${skillBackgroundHeight/2}px)`,
          "top":`-webkit-calc(50% - ${skillBackgroundHeight/2}px)`
        });
      }
    } else {
      $('.skillBackground')
      .css(
        {"height":`calc(${thisSkillNowHeight}px - 2rem)`},
        {"height":`-webkit-calc(${thisSkillNowHeight}px - 2rem)`}
      );
      skillBackgroundWidth = $('.skillBackground').width();
      skillBackgroundHeight = $('.skillBackground').height();
      $('.skillBackground').css({
        "left":`calc(50% - ${skillBackgroundWidth/2}px)`,
        "left":`-webkit-calc(50% - ${skillBackgroundWidth/2}px)`,
        "top":`calc(50% - ${skillBackgroundHeight/2}px)`,
        "top":`-webkit-calc(50% - ${skillBackgroundHeight/2}px)`
      });
    }

    // hide text on portfolio items on larger screens

    $('.portfolio-item').each(function(){
      $(this).css({
        minHeight: `${$(this).width()/16*9}px`
      })
    });
    // if ( $('.portfolio-item').width() >= 300 ) {
    //   $('.portfolio-item').on("hover", function(){
    //     $(this).find('.portfolio-item__meta').fadeToggle(400);
    //   });
    // }
    $('.submit-message').on('click', function(event){
      let textarea = $('.contact-form').find('textarea');
      if (textarea.val().length < 5) {
        event.preventDefault();
        alert('Please submit a message text');
        return false;
      } else {
        return true;
      }
    });
  });
})(jQuery);
