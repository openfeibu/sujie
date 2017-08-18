/**
 * Created by admin on 2017/3/2.
 */
$(document).ready(function () {
    var inow,index=0,lnow=0;
    //var imgs = $('.banner .bannerDiv ul li');
    //console.log(imgs);
    var bannerDiv = $('.banner .bannerDiv');
    var size = $('.bannerDiv ul li').size();
    var ols = $('.banner ol li');

    ols.click(function () {
        inow = parseInt($(this).index());
        if(inow == lnow){
            return false;
        }
        ols.eq(inow).addClass('liAdd').siblings().removeClass('liAdd');
        bannerDiv.stop().animate({left:inow*-100+'%'});
        lnow = inow;
    });
   //自动轮播
    run();
    var t;
    function run(){
        t = setInterval(move,5000);
    }
    $('.banner').hover(function(){
        clearInterval(t);
    },function(){
        run();
    });
   function move(){
       //console.log(1);
       index++;
       if(index==size){
           index=0;
       }
       ols.eq(index).addClass('liAdd').siblings().removeClass('liAdd');
       bannerDiv.stop().animate({left:index*-100+'%'});
   }


});


$(function () {
    // var lis = $(".searchAr .classify ul li");
    // var dnow;
    // lis.hover(function () {
    //     $(this).find("dl").stop().slideToggle(200);
    // });
    $("#navfouce li").hover(function(){
    var i = $(this).index();
     if( i < 3){
       var h = $('#navbox .cont').eq(i).height();
        $('#navbox .cont').eq(i).show().siblings().hide();
        $("#navbox").stop().animate({
          'opacity':1,
          'height':h
        });
      }else{
       $("#navbox").stop().animate({
          'opacity':0,
          'height':0
        });
      }
    })
    $(".index-nav").hover(function(){},function(){
      $("#navbox").stop().animate({
          'opacity':0,
          'height':0
        });
    });
    $(window).scroll(function(){
      var t = $(window).scrollTop();
      console.log(t)
       if(t > 100){
        $("#searchHeader").stop().animate({"top":0,"opacity":1})
       }else{
        console.log(1)
        $("#searchHeader").stop().animate({"top":-58,"opacity":0})

       }
    });
    $(".inputTxt input").on("focus",function(){
      $(this).parents(".search ").css("border","1px solid orange")
    })
    $(".inputTxt input").on("blur",function(){
      $(this).parents(".search").css("border","1px solid #65b4ec")
    })
});

//tab
    $(function () {
        var $serbox = $('.serbox');
        var $smaBig = $('.smaBig');

       $serbox.hover(function () {
           $(this).addClass('wi470').siblings().css('transition','0.4s').removeClass('wi470');
           $smaBig.not($(this).find('.smaBig').addClass('left-180')).css('transition','0.4s').removeClass('left-180');

       });
    })
