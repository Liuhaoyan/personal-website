/**
 * Created by Administrator on 2017/3/28.
 */
$(function(){
    $("#switch-panel").click(function(){
        if($(this).hasClass('show-panel')){
            $("#switcher").css({'left':'-50px'});
            $("#switch-panel").removeClass('show-panel');
            $("#switch-panel").addClass("hide-panel");
        }else if($(this).hasClass('hide-panel')){
            $("#switcher").css({'left':'0'});
            $("#switch-panel").removeClass('hide-panel');
            $("#switch-panel").addClass("show-panel");
        }
    });
   $("#picture1").mouseover(function(){
       $("#picture1").attr('src','assets/img/1.jpg');
   });
    $("#picture1").mouseout(function(){
        $("#picture1").attr('src','assets/img/2.jpg');
    });
    $("#picture2").mouseover(function(){
        $("#picture2").attr('src','assets/img/2.jpg');
    });
    $("#picture2").mouseout(function(){
        $("#picture2").attr('src','assets/img/1.jpg');
    });
    //选项卡
    var $category_li=$('#hobby-category li');
    var $select_content_div=$('#selected-content div');
    $select_content_div[0].className='selected';
    $category_li[0].className='active';
    $category_li.click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        var index=$category_li.index(this);
        $("#selected-content > div").eq(index).show().siblings().hide();
    });
    //profile遮罩层
    $(".portfolio-sec-wrap").mouseover(function(){
        var index=$(".portfolio-sec-wrap").index(this);
        $(".img-responsive").eq(index).siblings().css('opacity',1);
    });
    $(".portfolio-sec-wrap").mouseout(function(){
        var index=$(".portfolio-sec-wrap").index(this);
        $(".img-responsive").eq(index).siblings().css('opacity',0);
    });
    //contact me 获取焦点和失去焦点
    jQuery.focusblur = function(focusid) {
        var focusblurid = $(focusid);
        var defval = focusblurid.val();
        focusblurid.focus(function(){
            var thisval = $(this).val();
            if(thisval==defval){
                $(this).val("");
            }
        });
        focusblurid.blur(function(){
            var thisval = $(this).val();
            if(thisval==""){
                $(this).val(defval);
            }
        });

    };
    $.focusblur("#name");
    $.focusblur("#email");
    $.focusblur("#message");
    $(".grid").mouseover(function(){
        var index=$(".grid").index(this);
        $(".grid figcaption a").eq(index).css('opacity',1);
    });
    $(".grid").mouseout(function(){
        var index=$(".grid").index(this);
        $(".grid figcaption a").eq(index).css('opacity',0);
    });
    
  $('#email').blur(function(){
      var $message_email=$('#email').val();
      var reg=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if(!$message_email){
          $('#attention').val('X 请输入邮箱');
          $('#attention').css('display','block');
      }
      else{
          if (reg.test($message_email)){
              console.log('邮箱格式正确');
              // $('#attention').val('');
              $('#attention').css('display','none');
          }else{
              console.log('邮箱格式不正确');
              $('#attention').val('X 输入的邮箱格式有错，请重新输入');
              $('#attention').css('display','block');
          }
      }

  });
});
// var oIMg = document.getElementsByClassName('main-img')[0];
// oIMg.src = 'assets/img/smile.jpg';
// alert(oIMg.src);
