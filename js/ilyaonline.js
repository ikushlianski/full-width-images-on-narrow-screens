// center the skills logo as background taking into account the size of the skills panel itself
( function( $ ) {
  $(document).ready(function(){
    let thisSkillNowHeight = $('.this-skill-now').height();
    let skillBackgroundWidth = $('.skillBackground').width();
    let skillBackgroundHeight = $('.skillBackground').height();
    if (thisSkillNowHeight >= skillBackgroundHeight) {
      $('.skillBackground').css({
        "left":`calc(50% - ${skillBackgroundWidth/2}px)`,
        "left":`-webkit-calc(50% - ${skillBackgroundWidth/2}px)`,
        "top":`calc(50% - ${skillBackgroundHeight/2}px)`,
        "top":`-webkit-calc(50% - ${skillBackgroundHeight/2}px)`
      });
    } else {
      $('.skillBackground')
      .css({"height":`calc(${thisSkillNowHeight}px - 2rem)`});
      skillBackgroundWidth = $('.skillBackground').width();
      skillBackgroundHeight = $('.skillBackground').height();
      $('.skillBackground').css({
        "left":`calc(50% - ${skillBackgroundWidth/2}px)`,
        "left":`-webkit-calc(50% - ${skillBackgroundWidth/2}px)`,
        "top":`calc(50% - ${skillBackgroundHeight/2}px)`,
        "top":`-webkit-calc(50% - ${skillBackgroundHeight/2}px)`
      });
    }
  });
})(jQuery);
