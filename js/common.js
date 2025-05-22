
// rollover
// ==================================================
$(function(){
    $("a, .rollover").not(".current_btn, .link_box a").hover(function(){
        $(this).find("img").each(function (){
            $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
        });
    }, function(){
        $(this).find("img").each(function (){
            $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        });
    });
    $(document).ready(function() {
        $(".current_btn").find("img").each(function (){
            $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
        });
    });
    $("input[type^=image]").hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
    }, function(){
        $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
    });
});



// accordion
// ==================================================
$(function(){
    $(".accordion p").click(function(){
        $(this).next("ul").slideToggle();
        $(this).children("span").toggleClass("open");
    });

    $(".accordion dt").click(function(){
        $(this).next("dd").slideToggle();
        $(this).next("dd").siblings("dd").slideUp();
        $(this).toggleClass("open");
        $(this).siblings("dt").removeClass("open");
    });

});



// SmoothScroll
// ==================================================

$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});


// matchHeight
// ==================================================
$(function() {
    $('.item').matchHeight({
            property: 'height'
    });
});


// autosize
// ==================================================

$(document).on('click', '.open-default', function(event) {
  event.preventDefault();
  $('#modal-default').iziModal('open');
});
//$('#modal-default').iziModal();




// text_length
// ==================================================
$(function(){
    var $setElm = $('.article_li .txt');
    var cutFigure = '50'; // カットする文字数
    var afterTxt = '　…続きを読む'; // 文字カット後に表示するテキスト

    $setElm.each(function(){
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0,(cutFigure));

        console.log(textTrim);

        if(cutFigure < textLength) {
            $(this).html(textTrim + afterTxt).css({visibility:'visible'});
        } else if(cutFigure >= textLength) {
            $(this).css({visibility:'visible'});
        }
    });
});
