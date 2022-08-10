
$(document).ready(function(){

        //메인 브랜드 배너 슬라이드
        var brandswiper = new Swiper(".swiper.BrandSwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          pagination: {
            el: ".BrandSwiper .swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".BrandSwiper .swiper-button-next",
            prevEl: ".BrandSwiper .swiper-button-prev",
          },
        });



        //룩트 그릭요거트와 토핑 - 제품 소개 슬라이드
    var swiper = new Swiper('.swiper.ProductSwiper', {

        slidesPerView: 3,
        centeredSlides: true,
        loop: true,
        spaceBetween: 20,
        pagination: {
        el: '.ProductSwiper .swiper-pagination',
        clickable: true,
        },
        navigation: {
        nextEl: '.ProductSwiper .swiper-button-next',
        prevEl: '.ProductSwiper .swiper-button-prev',
        },

    })

    

    $('.gnb_1da, .main_submit').click(function(e){
        e.preventDefault();
        var clicka = $(this);
        $('body, html').animate({
            scrollTop : $(clicka.attr('href')).offset().top
        },300,function(){
            $('.gnb_1da, .main_submit').removeClass('act')
            clicka.addClass('act');
        })
    })
    
});


