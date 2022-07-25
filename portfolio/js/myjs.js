

$(document).ready(function(){

        // AOS를 실행해라 라는 실행문
        AOS.init();

    /////// 포트폴리오 섹션 스와이퍼 //////
    // 단순한 클래스명을 넣으면 스와이퍼가 들어간 전체 영역이 다 움직이게 되니까
    // 앞에 아이디값을 넣어서 구분지어주기

    const swiper = new Swiper('#portfolio .swiper', {
        // Optional parameters
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        loop: true,
      
        // If we need pagination
        pagination: {
          el: '#portfolio .swiper-pagination',
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '#portfolio .swiper-button-next',
          prevEl: '#portfolio .swiper-button-prev',
        },
      
        // And if we need scrollbar
        scrollbar: {
          el: '#portfolio .swiper-scrollbar',
        },
    });
})


$(document).ready(function(){
    $('#allMenu').click(function(){
        $(this).toggleClass('open');
    })

    $('#gnb a').click(function(e){
        e.preventDefault();
        var clicka = $(this);
        $('body, html').animate({
            scrollTop : $(clicka.attr('href')).offset().top
        },300,function(){
            $('#gnb a').removeClass('act')
            clicka.addClass('act');
        })
    })
})


// function을 불러온 주어가 그 실행문의 this가 됨
// 한 실행문 안에 this가 여러개 있을때 function 위치로 잘 구분하기


// a태그는 원래 고유의 기능이 내장되있어서 자바스크립트 명령이 잘 안먹힘
// 그래서 a태그의 원래 기능을 없애고 자바스크립트를 처리해야함
// > preventDefault
// 그러나 명령을 주려는 이벤트가 꼭 클릭이 아닐수도 있으니 e 라는 변수로 우선 호출
// > e.

// body와 html이 이동하면 animate 하겠다
// > $('body, html').animate
// 속도sms 400으로 움직인다
// > ({},400,function(){})

// scrollTop : $('#event').offset().top
// offset 바디태그 내에서 top의 위치값을 찾아내는 함수 (left도 있음)
//  /height가 불확실해서
//   바디태그의 높이값을 확실하게 계산하기 어렵기 때문에 bottom값은 없음
//  (right도 마찬가지로 width 값에 영향을 받기 때문에 없음)

// 속성값이 있는애들..?
// scrollTop : $($('this').attr('href')).offset().top