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
   $(".main-img").mouseover(function(){
       $(this).src="../img/smile.jpg";
   });
});