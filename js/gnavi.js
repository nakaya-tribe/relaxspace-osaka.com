
    var self_this,menu_size;
    var tab_ = "";
    //====================================
    //↑でタブを使用しない場合"off"に切り替える
    //====================================
$(function(){
    var position = "right";
    //====================================
    //↑で表示位置を切り替える（left・right）
    //====================================

    $('#switchBtn').on('click', function(){
        menu_size = $("#rwd_menu_wrap").outerWidth();
        self_this = this;
        menuConfig(self_this,menu_size,position);
    });

    menuSet(position);
    $(window).on('resize', function(){
        menuSet(position);
    });

    $("#menu_overlay").on("click",function(){
        if(window.innerWidth > 1023){
            $(".menu_tab_wrap").css({display:"none"});
            $("#menu_overlay").css({display:"none"});
            $(".menu_wrap").removeClass("btnAcv");
        }else{
            close($('#switchBtn'),position);
        }
    });
});

//ボタン位置設定
function menuSet(position){
    if(window.innerWidth < 1023){
        close($('#switchBtn'),position);
        $('#rwd_menu_wrap').hide();
        if(position == "right"){
            $("#switchBtn").css({
                left:"auto",
                right:"10px",
                top:"25px"
            });
            $("#rwd_menu_wrap").css({
                left:"auto",
                right:"0",
            });
        }else if(position == "left"){
            $('#rwd_menu_wrap').css({left:'0'});
        }
    } else {
        $('header').removeAttr('style');
        $('#rwd_menu_wrap').show();
    }
}

function menuConfig(self_this,menu_size,position){
    if($(".fa-plus").is(":visible")){
        close(self_this,position);

    } else {
        $(".fa-align-justify").hide();
        $(".fa-plus").show();
        if(position == "left"){
            $("#switchBtn").css({
                left:(menu_size),
                right:"0",
                top:"25px"
            });
        }else if(position == "right"){
            $("#switchBtn").css({
                left:"auto",
                right:(menu_size),
                top:"25px"
            });
        }

        $('#menu_overlay').fadeIn(500);
        $('#rwd_menu_wrap').stop(true, true).slideDown(300);
    };
}

function close(self_this,position){
    $(".fa-plus").hide();
    $(".fa-align-justify").show();
    if(position == "right"){
        $("#switchBtn").css({
            left:"auto",
            right:"10px",
            top:"25px"
        });
    }else if(position == "left"){
        $("#switchBtn").css({
            left:"10px",
            right:"0",
            top:"5px"
        });
    }

    $('#menu_overlay').stop(true, true).fadeOut(500);
    $('#rwd_menu_wrap').stop(true, true).fadeOut(300);
    $('header').removeAttr('style');
}

$(function(){
    $('li.menu_tab_wrap').hide();
    $('li.menu_wrap').on('click', function(){
        if(!$(this).hasClass("btnAcv")){
            $("li.menu_wrap").removeClass("btnAcv");
            $(this).addClass("btnAcv");
            if(window.innerWidth > 1023){
                $("#menu_overlay").css({display:"block"});
                $('li.menu_tab_wrap').fadeOut(500);
                $(this).next().fadeIn(500);
                if(tab_ == "off"){
                    $(".nav-flex li.btnAcv").css({"border-bottom": "1px solid #aaa"});
                }
            }else{
                $('li.menu_tab_wrap').slideUp(500);
                $(this).next().slideDown(500);
            }
        }
    });
});
