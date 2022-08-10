<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head_main.php');
?>

<h2 class="sound_only">최신글</h2>

<div id="main_wrap">

    <div id="mainBanner" class="d-flex align-items-start justify-content-center flex-column">
        <!-- <img src="/lukt/img/main_bg.jpg" alt="메인배너"> -->
        <div class="M_Banner01 container col-md-5 d-flex flex-column">
            <p class="body2 d-inline-block mt-3 mb-2" data-aos="fade-down">요즘 대세 클린식단, 그릭요거트</p>
            <div>
                <h2 class="maintitle">룩트로 어서오세요!<br> 정기구독 신청시 <span class="font-point-color" data-aos="zoom-in">첫 달 무료</span></h2>
                <p class="body2 pt-1 pb-4">한 달 동안 하루 한 끼 건강하고 맛있게 챙겨보세요</p>
            </div>
            <!-- <a href="#submit" class="button">정기구독 신청하기</a>    -->
            <a href="#submit" class="button">정기구독 신청하기</a>  
        </div>
    </div>

</div>


<div id="wrap" class="container">

    <div id="brand" class="">

        <div id="brandSlide" class="">
            <!-- 브랜드 메인배너 슬라이드 3장 -->
            <div class="swiper BrandSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/lukt/img/brand_banner_01.png" alt="브랜드배너">
                    </div>
                    <div class="swiper-slide">
                        <img src="/lukt/img/brand_banner_02.png" alt="브랜드배너">
                    </div>
                    <div class="swiper-slide">
                        <img src="/lukt/img/brand_banner_03.png" alt="브랜드배너">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div id="luktProduct" class="">
                <div class="contents-title">
                    <p class="title">룩트 그릭요거트와 토핑</p>
                </div>
                <div class="body1">
                    <p class="body2 content-title-padding">취향대로 즐기는 룩트 그릭요거트와<br>더 든든하고 맛있는 한끼를 완성시켜줄 다양한 토핑</p>
                </div>
        </div>

        <div id="productSlide" class="">
            <!-- 제품 소개 슬라이드 7장-->
            <div class="swiper ProductSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/lukt/img/product_banner_01.png" alt="띠크">
                    </div>
                    <div class="swiper-slide">
                        <img src="/lukt/img/product_banner_02.png" alt="마일드">
                    </div>
                    <div class="swiper-slide">
                        <img src="/lukt/img/product_banner_03.png" alt="그래놀라1">
                    </div>
                    <div class="swiper-slide">
                        <img src="/lukt/img/product_banner_04.png" alt="초코">
                    </div>
                    <div class="swiper-slide">
                        <img src="/lukt/img/product_banner_05.png" alt="흑임자">
                    </div>
                    <div class="swiper-slide">
                        <img src="/lukt/img/product_banner_06.png" alt="그래놀라2">
                    </div>
                    <div class="swiper-slide">
                        <img src="/lukt/img/product_banner_07.png" alt="허니스틱">
                    </div>
                    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>

    </div>

    <div id="recommend" class="">
        
        <div>
            <div class="contents-title">
                <p class="title">이런 분들에게 추천해요</p>
            </div>
            <div class="body1">
                <p class="body2 content-title-padding">룩트와 정기구독 서비스가 낯선 분들을 위한 체크리스트</p>
            </div>
        </div>

        <div id="recommend_box" class="d-md-flex justify-content-around align-items-center">
            <div id="re_textBubble" class="">
                <ul class="d-block d-md-flex flex-column">
                    <li class="re_textBubble01">
                        <img src="/lukt/img/re_text_bubble.svg" alt="말풍선이미지">
                        <p class="body3 d-block">다른 그릭요거트보다<br>룩트 요거트가 더 맛있을까?</p>
                    </li>
                    <li class="re_textBubble02">
                        <img src="/lukt/img/re_text_bubble.svg" alt="말풍선이미지">
                        <p class="body3 d-block">그릭요거트는 좋아하지만<br>바로 정기구독은 부담스러운데..</p>
                    </li>
                    <li class="re_textBubble03">
                        <img src="/lukt/img/re_text_bubble.svg" alt="말풍선이미지">
                        <p class="body3 d-block">한 끼 식사를 그릭요거트로<br>충분하게 대체할 수 있을까?</p>
                    </li>
                </ul>
            </div>
            <div id="re_mainCopy" class="body2">
                <i class="fa-solid fa-quote-left"></i>
                <p class="sub_title sub_title_a">걱정하지 마세요!</p>
                <p class="sub_title">첫달 구독료는 저희가 부담할게요<br>맛있고 건강하게 즐겨만 주세요</p>
            </div>
        </div>
        <div id="re_checkList" class="body2">
            <ul class="d-flex justify-content-around align-items-center flex-wrap">
                <li class="px-3 py-3 p-md-0">
                    <i class="fa-solid fa-check"></i>
                    <p class="body3">그릭요거트 특유의 신맛 없이<br>신선한 우유의 고소한 맛을 느끼고 싶으신 분</p>
                </li>
                <li class="px-3 py-3 p-md-0">
                    <i class="fa-solid fa-check"></i>
                    <p class="body3">클린한 식단관리를 위해<br>한 끼 식사를 대체할 건강식을 찾으시는 분</p>
                </li>
                <li class="px-3 py-3 p-md-0">
                    <i class="fa-solid fa-check"></i>
                    <p class="body3">바쁜 스케줄로 직접 장보기 대신<br>주기적으로 배달 오는 서비스가 필요하신 분</p>
                </li>
            </ul>
        </div>

    </div>

    <div id="submit" class="container-fluid pt-5 pb-5">

        <div>
            <div class="contents-title">
                <p class="title">룩트 그릭요거트 정기구독하기</p>
            </div>
            <div class="body1">
                <p class="body2 content-title-padding">한달동안 내 집까지 배송되는 그릭요거트를 무료로 즐겨보세요<br>한달이 지나면 룩트 그릭요거트의 매력에 푹 빠지실거에요</p>
            </div>
        </div>

        <form action="경로" id="form" name="form">

            <strong class="body2 font-w700 font-main-color row">정기구독 제품 선택 (4주구성)</strong>
            <div id="select_product" class="form-group m-auto text-left">
                <div class="select_product_01 custom-control custom-radio custom-control-inline col-3">
                    <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">띠크 6개</label>
                </div>
                <div class="select_product_02 custom-control custom-radio custom-control-inline col-3">
                    <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">마일드 6개</label>
                </div>
                <div class="select_product_03 custom-control custom-radio custom-control-inline col-3 mb-3">
                    <input type="radio" id="customRadioInline3" name="customRadioInline" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline3">띠크/마일드 혼합</label>
                </div>
            </div>

                <strong class="body2 font-w700 font-main-color row">배송정보</strong>
                <div class="form-group row">
                    <label for="exampleInputEmail1">수령인</label>
                    <input type="email" class="form-control caption rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="수령인을 입력해주세요">
                    <small id="emailHelp" class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword1">연락처</label>
                    <input type="password" class="form-control caption rounded-0" id="exampleInputPassword1" placeholder="ex;010-1234-5678 형식에 맞춰 입력해주세요">
                </div>

                <div class="form-group row">
                    <label for="exampleInputPassword1">주소</label>
                    
                    <div class="input-group mb-3 zipcode">
                        <input type="text" class="form-control caption rounded-0 col-md-4" placeholder="우편번호" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append col">
                            <button class="form_btn border btn-light caption rounded-0 col-9 col-md-3" type="button" id="button-addon2">우편번호 검색</button>
                        </div>
                    </div>

                    <input type="password" class="form-control caption rounded-0 mb-2" id="exampleInputPassword1" placeholder="상세주소">
                    
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label caption mb-2" for="customCheck1">기본 배송지로 저장</label>
                    </div>

                    <select id="inputState" class="form-control caption rounded-0">
                            <option selected>배송메모를 선택해주세요</option>
                            <option>배송 전 연락 부탁드립니다.</option>
                            <option>부재시 문 앞에 놓아주세요.</option>
                            <option>부재시 무인택배함에 배달해주세요.</option>
                            <option>부재시 경비실에 맡겨주세요.</option>
                    </select>
                </div>

                <strong class="body2 font-w700 font-main-color row">결제수단 등록</strong>
                <div class="form-group row">
                    <div class="credit input-group mb-3 d-md-flex justify-content-center align-items-start flex-column">
                        <small id="emailHelp" class="form-text text-muted mt-0 caption mb-2">등록하신 결제 수단으로 정기구독 상품이 자동결제 됩니다.</small>
                        <div class="input-group-append col px-0">
                            <button class="form_btn btn-light border caption rounded-0 col-6 col-md-2 px-2 py-2" type="button" id="button-addon2">신용/체크카드 등록하기</button>
                        </div>
                    </div>

                </div>

                <div class="custom-control custom-checkbox text-left d-flex align-items-center">
                    <input type="checkbox" class="custom-control-input" id="agree01">
                    <label class="custom-control-label caption pr-2" for="agree01">개인정보 수집 및 이용 동의</label>
                    <a href="#" class="border-bottom border-secondary">보기</a>
                </div>

                <div class="custom-control custom-checkbox text-left d-flex align-items-center">
                    <input type="checkbox" class="custom-control-input" id="agree02">
                    <label class="custom-control-label caption pr-2" for="agree02">정기과금 이용 동의</label>
                    <a href="#" class="border-bottom border-secondary">보기</a>
                </div>
  
            <button type="submit" class="btn btn-secondary btn-sm rounded-0 mt-5 px-5 py-3">정기구독 결제하기</button>


        </form>

    </div>


    <div id="review"class="vh-100">
        <div>
            <div class="contents-title">
                <p class="title">정기구독 고객 리뷰</p>
            </div>
            <div class="body1">
                <p class="body2 content-title-padding">#정기구독 #내돈내산<br>만족도 높은 정기구독 고객들의 리뷰도 살펴보세요</p>
            </div>
        </div>

        <div id="reviewSlide" class="ag-slide-block">
            <div class="swiper-container reviewSwiper">
                <ul class="swiper-wrapper ag-slide_list">
                    <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="0">
                        <img src="/lukt/img/review_01.png" class="ag-slide_img" alt="">
                        <div class="ag-slide_info clearfix">
                            <div class="ag-slide-info_descr">
                                <h6 class="ag-slide-info_title">"그동안 먹던 그릭요거트랑은 꾸덕함이 달라요"</h6>
                                <span class="ag-slide-info_route text-left">그릭요거트를 워낙 좋아해서 식사 대용으로, 간식으로 자주 먹는데<br>
                                                                룩트 요거트는 다른 요거트랑 꾸덕함과 쫀득함이 차원이 달라요!!<br>
                                                                쫀득해서 빵에 발라먹기도 좋고 질리지도 않네요 :)
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="0">
                        <img src="/lukt/img/review_02.png" class="ag-slide_img" alt="">
                        <div class="ag-slide_info clearfix">
                            <div class="ag-slide-info_descr">
                                <h6 class="ag-slide-info_title">"그동안 먹던 그릭요거트랑은 꾸덕함이 달라요"</h6>
                                <span class="ag-slide-info_route text-left">그릭요거트를 워낙 좋아해서 식사 대용으로, 간식으로 자주 먹는데<br>
                                                                룩트 요거트는 다른 요거트랑 꾸덕함과 쫀득함이 차원이 달라요!!<br>
                                                                쫀득해서 빵에 발라먹기도 좋고 질리지도 않네요 :)
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="0">
                        <img src="/lukt/img/review_03.png" class="ag-slide_img" alt="">
                        <div class="ag-slide_info clearfix">
                            <div class="ag-slide-info_descr">
                                <h6 class="ag-slide-info_title">"그동안 먹던 그릭요거트랑은 꾸덕함이 달라요"</h6>
                                <span class="ag-slide-info_route text-left">그릭요거트를 워낙 좋아해서 식사 대용으로, 간식으로 자주 먹는데<br>
                                                                룩트 요거트는 다른 요거트랑 꾸덕함과 쫀득함이 차원이 달라요!!<br>
                                                                쫀득해서 빵에 발라먹기도 좋고 질리지도 않네요 :)
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="0">
                        <img src="/lukt/img/review_04.png" class="ag-slide_img" alt="">
                        <div class="ag-slide_info clearfix">
                            <div class="ag-slide-info_descr">
                                <h6 class="ag-slide-info_title">"그동안 먹던 그릭요거트랑은 꾸덕함이 달라요"</h6>
                                <span class="ag-slide-info_route text-left">그릭요거트를 워낙 좋아해서 식사 대용으로, 간식으로 자주 먹는데<br>
                                                                룩트 요거트는 다른 요거트랑 꾸덕함과 쫀득함이 차원이 달라요!!<br>
                                                                쫀득해서 빵에 발라먹기도 좋고 질리지도 않네요 :)
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="0">
                        <img src="/lukt/img/review_05.png" class="ag-slide_img" alt="">
                        <div class="ag-slide_info clearfix">
                            <div class="ag-slide-info_descr">
                                <h6 class="ag-slide-info_title">"그동안 먹던 그릭요거트랑은 꾸덕함이 달라요"</h6>
                                <span class="ag-slide-info_route text-left">그릭요거트를 워낙 좋아해서 식사 대용으로, 간식으로 자주 먹는데<br>
                                                                룩트 요거트는 다른 요거트랑 꾸덕함과 쫀득함이 차원이 달라요!!<br>
                                                                쫀득해서 빵에 발라먹기도 좋고 질리지도 않네요 :)
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="0">
                        <img src="/lukt/img/review_06.png" class="ag-slide_img" alt="">
                        <div class="ag-slide_info clearfix">
                            <div class="ag-slide-info_descr">
                                <h6 class="ag-slide-info_title">"그동안 먹던 그릭요거트랑은 꾸덕함이 달라요"</h6>
                                <span class="ag-slide-info_route text-left">그릭요거트를 워낙 좋아해서 식사 대용으로, 간식으로 자주 먹는데<br>
                                                                룩트 요거트는 다른 요거트랑 꾸덕함과 쫀득함이 차원이 달라요!!<br>
                                                                쫀득해서 빵에 발라먹기도 좋고 질리지도 않네요 :)
                                </span>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </div>

    <div id="event"class="">
        <div>
            <div class="contents-title">
                <p class="title">진행중인 이벤트 더보기</p>
            </div>
            <div class="body1">
                <p class="body2 content-title-padding">진행중인 다양한 이벤트와 혜택을 확인해 보세요</p>
            </div>
        </div>
        <div class="">
            <div id="row1_wrap" class="d-md-flex justify-content-between align-items-center">
                <div class="row1_left text-center d-md-flex flex-column align-items-center">
                    <h2 class="body1">신제품 사전 체험단 모집</h2>
                    <p class="body3 mt-3 mb-md-5">신제품 정식 출시 전, 미리 맛보고<br>리뷰를 남겨주실 사전 체험단을 모집합니다</p>
                    <a href="#event" class="button">자세히 보기</a>
                </div>
                <div class="row1_right text-center">
                    <img src="/lukt/img/event_01.png" alt="체험단이벤트">
                </div>
            </div>
            <div id="row2_wrap" class="d-md-flex justify-content-between align-items-center flex-md-row-reverse">
                <div class="row2_left text-center d-md-flex flex-column align-items-center">
                    <h2 class="body1">친구와 함께하는 짝꿍이벤트</h2>
                    <p class="body3 mt-3 mb-md-5">짝꿍과 함께 첫주문시 나와 짝꿍 모두에게<br>2,000원 즉시 할인쿠폰을 드립니다</p>
                    <a href="#event" class="button">자세히 보기</a>
                </div>
                <div class="row2_right text-center">
                    <img src="/lukt/img/event_02.png" alt="짝꿍이벤트">
                </div>
            </div>

        </div>
        <div class="event_share">
            <strong class="body2">이벤트 소식 공유하기</strong>
            <div>
                <div>
                    <a href="#" class="caption"><i class="fa-solid fa-message">카카오톡 공유</i></a>
                </div>
                <div>
                    <a href="#" class="caption"><i class="fa-solid fa-link">링크 복사</i></a>
                </div>
            </div>
        </div>
    </div>

    <div id="stock" class="vh-100 mb-5">
        <div>
            <div class="contents-title">
                <p class="title">오프라인 매장 찾기</p>
            </div>
            <div class="body1">
                <p class="body2 content-title-padding">오프라인 매장에서 맛보고 구입하세요<br>예약방문으로 편하게 이용 가능합니다</p>
            </div>
        </div>

        <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.3386108503664!2d127.03436391558701!3d37.499931135696905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca3fe38550087%3A0xfd5b0153f0a4a5a5!2z6rCV64Ko7YyM7J2064K47Iqk7IS87YSw!5e0!3m2!1sko!2skr!4v1659499846050!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </div>

</div>    

    <aside id="quick" class="side-bar">
        <nav class="side-menu">
            <ul>
                <li><a href="#submit" class="d-flex">정기구독신청</a></li>
                <li><a href="#event" class="d-flex">이벤트</a></li>
                <li><a href="#stock" class="d-flex">매장찾기</a></li>
            </ul>
        </nav>
    </aside>


<?php
include_once(G5_PATH.'/tail.php');