jQuery(function() {
  // SMOOTH SCROLL
  $('a[href^="#"]').click(function(){
    var fix = 0,
        speed = 400,
        href = $(this).attr('href'),
        target = $(href == "#" || href == "" ? 'html' : href),
        position = target.offset().top;
    fix = parseInt( target.find('h2').outerHeight() );
    $('body, html').animate({scrollTop:position - fix}, speed, 'swing');
    return false;
  });
  
  // FIXED MENU EXCHANGE
  var flag = true,
      nav = $('.g-nav'),
      nav_position = 0,
      mq = window.matchMedia('screen and (max-width: 768px)');
  
  $(window).on('scroll resize', function(){
    if(flag){
      flag = false;
      setTimeout(function(){
        nav_position = parseInt( nav.offset().top);
        if(mq.matches) {
          nav.find('.inner').removeClass('fixed');
          flag = true;
          return flag;
        } else {
          var ScrollPosition = $(window).scrollTop();
          if(ScrollPosition > nav_position ) {
            nav.find('.inner').addClass('fixed');
          } else {
            nav.find('.inner').removeClass('fixed');
          }
          flag = true;
          return flag;
        }
      }, 200);
    }
  });
  
  // MOBILE MENU BUTTON
  var button = $('#menu-button');
  button.click(function(){
    button.toggleClass('open');
  });
  
  $(function validateForm() { $('#form-apply').attr('action', 'xrnbR9.php'); return true; }); 
});