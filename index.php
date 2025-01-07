<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT . '/inc/layouts/head.php'; ?>
<?php include_once $STATIC_ROOT . '/inc/layouts/header.php'; ?>

<!-----INTRO---->

<div class="no-main-intro">
    <div class="no-main-intro-clip"></div>
    <div class="no-main-intro-cover">
        <div class="no-main-intro-container">
            <div class="no-main-intro-symbol">
                <svg viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.4373 21.3632H0V0H22.4373V21.3632ZM2.36308 19.1195H20.0743V2.24373H2.36308V19.1195Z"
                        fill="#0DABE3" />
                </svg>

            </div>
            <div class="no-main-intro-txt">
                <svg viewBox=" 0 0 149 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.47739 18.1914C0.143217 18.1914 0 18.0482 0 17.6901V1.69755C0 1.33951 0.119348 1.19629 0.47739 1.19629H5.10808C9.61942 1.19629 11.0516 2.79555 11.0516 4.82446V6.39984C11.0516 7.6888 10.431 8.69132 8.85559 9.26419C10.8368 9.78931 11.8154 10.8634 11.8154 12.3195V14.4439C11.8154 16.4966 10.3832 18.1914 5.8719 18.1914H0.47739ZM2.53017 3.2252V8.52423H5.27516C7.44729 8.52423 8.49755 7.73654 8.49755 6.3521V5.20637C8.49755 3.82194 7.44729 3.2252 5.08421 3.2252H2.53017ZM2.53017 10.4099V16.1625H5.84803C8.21111 16.1625 9.26137 15.3987 9.26137 14.0142V12.4866C9.26137 11.2454 8.21111 10.4099 5.84803 10.4099H2.53017Z"
                        fill="#0DABE3" />
                    <path
                        d="M18.3557 16.1147H25.0631C25.3972 16.1147 25.5643 16.2102 25.5643 16.5683V17.714C25.5643 18.072 25.3972 18.1914 25.0631 18.1914H16.2075C15.921 18.1914 15.7778 18.0243 15.7778 17.6901V1.69755C15.7778 1.33951 15.8972 1.19629 16.2791 1.19629H17.8783C18.2125 1.19629 18.3557 1.33951 18.3557 1.69755V16.1147Z"
                        fill="#0DABE3" />
                    <path
                        d="M30.911 14.1336C30.911 15.4941 31.9613 16.3057 34.3005 16.3057C36.6636 16.3057 37.7377 15.4703 37.7377 14.1336V1.69755C37.7377 1.33951 37.8571 1.19629 38.2151 1.19629H39.8144C40.1724 1.19629 40.2917 1.33951 40.2917 1.69755V14.5393C40.2917 16.5921 38.8118 18.3823 34.3244 18.3823C29.8369 18.3823 28.3809 16.5921 28.3809 14.5393V1.69755C28.3809 1.33951 28.5479 1.19629 28.8821 1.19629H30.4814C30.8156 1.19629 30.9588 1.33951 30.9588 1.69755V14.1336H30.911Z"
                        fill="#0DABE3" />
                    <path
                        d="M45.5667 18.1914C45.2326 18.1914 45.0894 18.0482 45.0894 17.6901V1.69755C45.0894 1.33951 45.2087 1.19629 45.5667 1.19629H54.5417C54.8759 1.19629 55.0429 1.31564 55.0429 1.67368V2.79555C55.0429 3.15359 54.8759 3.27294 54.5417 3.27294H47.6434V8.3094H54.0643C54.4223 8.3094 54.5894 8.42875 54.5894 8.78679V9.86092C54.5894 10.1951 54.4223 10.3383 54.0643 10.3383H47.6434V16.1147H54.8281C55.1623 16.1147 55.3294 16.2102 55.3294 16.5683V17.714C55.3294 18.072 55.1623 18.1914 54.8281 18.1914H45.5667Z"
                        fill="#0DABE3" />
                    <path class="change"
                        d="M68.2192 5.18248C68.2192 3.84579 67.3599 3.05809 65.0446 3.05809C62.7292 3.05809 61.8699 3.82192 61.8699 5.18248V5.68374C61.8699 6.82948 62.6576 7.16365 63.2066 7.35461L67.9805 9.07321C69.5559 9.64608 70.8687 10.6247 70.8687 12.4627V14.5393C70.8687 16.5921 69.365 18.3823 64.9968 18.3823C60.6287 18.3823 59.1011 16.5921 59.1011 14.5393V13.0833C59.1011 12.7252 59.2682 12.582 59.6023 12.582H61.1539C61.488 12.582 61.6312 12.7252 61.6312 13.0833V14.2052C61.6312 15.5418 62.6338 16.3295 64.9968 16.3295C67.3599 16.3295 68.3863 15.5657 68.3863 14.2052V13.0356C68.3863 11.7943 67.2167 11.3647 66.1903 10.9828L61.7506 9.35965C60.6049 8.92999 59.4114 7.80813 59.4114 6.25661V4.82444C59.4114 2.77166 60.7719 0.981445 65.0446 0.981445C69.3172 0.981445 70.7255 2.77166 70.7255 4.82444V5.92243C70.7255 6.25661 70.5823 6.39983 70.2481 6.39983H68.6966C68.3386 6.39983 68.2192 6.25661 68.2192 5.92243V5.18248Z"
                        fill="black" />
                    <path class="change"
                        d="M86.6705 14.5389C86.6705 16.2098 85.668 17.7135 82.8753 18.2148L86.0977 20.9598C86.3602 21.1746 86.3841 21.4133 86.1454 21.6281L85.3338 22.4874C85.1429 22.6784 84.8803 22.7023 84.6416 22.5113L79.9393 18.358C76.0009 18.1909 74.7119 16.4962 74.7119 14.5389V4.84787C74.7119 2.7951 76.1918 1.00488 80.6554 1.00488C85.1668 1.00488 86.6228 2.7951 86.6228 4.84787V14.5389H86.6705ZM77.3137 14.1809C77.3137 15.5653 78.364 16.353 80.7032 16.353C83.0662 16.353 84.1165 15.5653 84.1165 14.1809V5.20592C84.1165 3.82149 83.0662 3.03379 80.7032 3.03379C78.364 3.03379 77.3137 3.82149 77.3137 5.20592V14.1809Z"
                        fill="black" />
                    <path class="change"
                        d="M93.5927 14.1336C93.5927 15.4941 94.6429 16.3057 96.9821 16.3057C99.3452 16.3057 100.419 15.4703 100.419 14.1336V1.69755C100.419 1.33951 100.539 1.19629 100.897 1.19629H102.496C102.854 1.19629 102.973 1.33951 102.973 1.69755V14.5393C102.973 16.5921 101.517 18.3823 97.006 18.3823C92.5185 18.3823 91.0625 16.5921 91.0625 14.5393V1.69755C91.0625 1.33951 91.2296 1.19629 91.5638 1.19629H93.163C93.4972 1.19629 93.6404 1.33951 93.6404 1.69755V14.1336H93.5927Z"
                        fill="black" />
                    <path class="change"
                        d="M113.333 1.19629C113.667 1.19629 113.858 1.33951 113.953 1.67368L119.038 17.6901C119.133 18.0004 119.014 18.1675 118.656 18.1675H117.009C116.675 18.1675 116.507 18.0004 116.436 17.6901L115.195 13.8233H109.657L108.44 17.6901C108.368 18.0004 108.201 18.1675 107.867 18.1675H106.339C106.005 18.1675 105.862 18.0004 105.981 17.6901L111.065 1.67368C111.161 1.33951 111.352 1.19629 111.686 1.19629H113.333ZM113.166 7.35462C112.855 6.42371 112.474 3.98902 112.45 3.70259C112.402 3.91741 112.068 6.23276 111.71 7.30688L110.23 11.8898H114.622L113.166 7.35462Z"
                        fill="black" />
                    <path class="change"
                        d="M124.789 11.4602V17.6663C124.789 18.0243 124.694 18.1675 124.312 18.1675H122.713C122.379 18.1675 122.235 18.0243 122.235 17.6663V1.69755C122.235 1.33951 122.355 1.19629 122.713 1.19629H128.036C132.547 1.19629 133.979 2.9865 133.979 5.03928V7.64106C133.979 9.16871 133.168 10.5293 130.9 11.126L134.051 17.6663C134.17 17.9527 133.955 18.1675 133.573 18.1675H132.022C131.664 18.1675 131.592 17.9766 131.449 17.6663L128.489 11.4602H128.036H124.789ZM124.789 3.27294V9.38353H128.036C130.399 9.38353 131.449 8.59584 131.449 7.21141V5.44506C131.449 4.10837 130.399 3.27294 128.036 3.27294H124.789Z"
                        fill="black" />
                    <path class="change"
                        d="M138.3 18.1914C137.965 18.1914 137.822 18.0482 137.822 17.6901V1.69755C137.822 1.33951 137.942 1.19629 138.3 1.19629H147.275C147.609 1.19629 147.776 1.31564 147.776 1.67368V2.79555C147.776 3.15359 147.609 3.27294 147.275 3.27294H140.376V8.3094H146.797C147.155 8.3094 147.322 8.42875 147.322 8.78679V9.86092C147.322 10.1951 147.155 10.3383 146.797 10.3383H140.376V16.1147H147.537C147.871 16.1147 148.038 16.2102 148.038 16.5683V17.714C148.038 18.072 147.871 18.1914 147.537 18.1914H138.3Z"
                        fill="black" />
                </svg>

            </div>
        </div>
    </div>
</div>

<main class="no-main">

    <section class="no-main-visual">
        <div class="no-main-visual__inner">
            <!----SWIPER--->
            <div class="swiper no-main-visual-slider">
                <ul class="swiper-wrapper">
                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <li class="swiper-slide">
                        <a href="#">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_visual_img_<?= $i ?>.png" alt="">
                            </figure>
                            <div class="no-main-visual-txt">
                                <div class="no-container-2xl">
                                    <div class="no-heading-sm">
                                        <div class="no-main-visual-txt__info --of-h">
                                            <p class="location">블루스퀘어 신한카드홀</p>
                                            <p class="time">2024.09.07 - 2024.11.10</p>
                                        </div>
                                    </div>
                                    <div class="no-pd-md--t --of-h">
                                        <h2 class="no-display-sm">뮤지컬 지킬 앤 하이드</h2>
                                    </div>
                                    <div class="no-pd-sm--t --of-h">
                                        <h3 class="no-heading-sm">
                                            모두가 기다린 문제의 화제작! <br>
                                            뜨거운 반응 속에 1년 만의 컴백!
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="no-main-visual-backdrop"></div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!---ETC---->
            <div class="no-main-visual-etc">
                <!---autoplay--->
                <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                </div>
                <!---pagination--->
                <div class="no-main-visual-pagination swiper-pagination">
                </div>
            </div>
        </div>
    </section>


    <section class="no-main-works no-pd-2xl--y ">
        <div class="no-container-2xl">
            <div class="f ai-c jc-sb">
                <h2 class="no-display-md no-section-title">What's ON</h2>
                <a href="#" class="no-text-circle-btn">
                    <div class="no-text-circle --toggle-images">
                        <img src="<?=IMG_PATH?>/main/text-circle-light.png" alt="" class="--dark-img">
                        <img src="<?=IMG_PATH?>/main/text-circle-dark.png" alt="" class="--light-img">
                    </div>
                    <div class="no-text-circle-arrow">
                        <i class="fa-thin fa-arrow-right-long"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="no-pd-xl--t">
            <div class="no-main-works__inner">
                <div class="swiper no-main-works-slider">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_works_1.png" alt="">
                                <div class="no-main-works-link">
                                    <ul class="">
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--white">자세히 보기</a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--secondary">
                                                예매하기
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="no-main-works-info --t-center">
                                <div class="no-main-works-info__etc no-pd-sm--t">
                                    <h3 class="no-heading-md">장우영 팬미팅</h3>
                                    <div class="no-main-works-info__tag no-pd-xs--t">
                                        <ul class="">
                                            <li class=" tag">
                                                <i class="fa-solid fa-timer"></i>
                                                2024.11.29 - 2025.05.18
                                            </li>
                                            <li class="tag">
                                                <i class="fa-regular fa-location-dot"></i>
                                                블루스퀘어 신한카드홀
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_works_2.png" alt="">
                                <div class="no-main-works-link">
                                    <ul class="">
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--white">자세히 보기</a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--secondary">
                                                예매하기
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="no-main-works-info --t-center">
                                <div class="no-main-works-info__etc no-pd-sm--t">
                                    <h3 class="no-heading-md">PITTA 강형호 앙코르 콘서트</h3>
                                    <div class="no-main-works-info__tag no-pd-xs--t">
                                        <ul class="">
                                            <li class=" tag">
                                                <i class="fa-solid fa-timer"></i>
                                                2024.11.29 - 2025.05.18
                                            </li>
                                            <li class="tag">
                                                <i class="fa-regular fa-location-dot"></i>
                                                블루스퀘어 신한카드홀
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_works_3.png" alt="">
                                <div class="no-main-works-link">
                                    <ul class="">
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--white">자세히 보기</a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--secondary">
                                                예매하기
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="no-main-works-info --t-center">
                                <div class="no-main-works-info__etc no-pd-sm--t">
                                    <h3 class="no-heading-md">2024 CHANYEOL LIVE TOUR - 서울</h3>
                                    <div class="no-main-works-info__tag no-pd-xs--t">
                                        <ul class="">
                                            <li class=" tag">
                                                <i class="fa-solid fa-timer"></i>
                                                2024.11.29 - 2025.05.18
                                            </li>
                                            <li class="tag">
                                                <i class="fa-regular fa-location-dot"></i>
                                                블루스퀘어 신한카드홀
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_works_4.png" alt="">
                                <div class="no-main-works-link">
                                    <ul class="">
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--white">자세히 보기</a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--secondary">
                                                예매하기
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="no-main-works-info --t-center">
                                <div class="no-main-works-info__etc no-pd-sm--t">
                                    <h3 class="no-heading-md">이민혁 HUTAZONE 팬미팅 '24/7'</h3>
                                    <div class="no-main-works-info__tag no-pd-xs--t">
                                        <ul class="">
                                            <li class=" tag">
                                                <i class="fa-solid fa-timer"></i>
                                                2024.11.29 - 2025.05.18
                                            </li>
                                            <li class="tag">
                                                <i class="fa-regular fa-location-dot"></i>
                                                블루스퀘어 신한카드홀
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_works_5.png" alt="">
                                <div class="no-main-works-link">
                                    <ul class="">
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--white">자세히 보기</a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--secondary">
                                                예매하기
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="no-main-works-info --t-center">
                                <div class="no-main-works-info__etc no-pd-sm--t">
                                    <h3 class="no-heading-md">
                                        너드 커넥션(NERD CONNECTION) 콘서트 'And yet, We still'</h3>
                                    <div class="no-main-works-info__tag no-pd-xs--t">
                                        <ul class="">
                                            <li class=" tag">
                                                <i class="fa-solid fa-timer"></i>
                                                2024.11.29 - 2025.05.18
                                            </li>
                                            <li class="tag">
                                                <i class="fa-regular fa-location-dot"></i>
                                                블루스퀘어 신한카드홀
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_works_6.png" alt="">
                                <div class="no-main-works-link">
                                    <ul class="">
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--white">자세히 보기</a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--secondary">
                                                예매하기
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="no-main-works-info --t-center">
                                <div class="no-main-works-info__etc no-pd-sm--t">
                                    <h3 class="no-heading-md">
                                        FANTASY BOYS 1ST FANMEETING 〈Summer in the Fantasy〉</h3>
                                    <div class="no-main-works-info__tag no-pd-xs--t">
                                        <ul class="">
                                            <li class=" tag">
                                                <i class="fa-solid fa-timer"></i>
                                                2024.11.29 - 2025.05.18
                                            </li>
                                            <li class="tag">
                                                <i class="fa-regular fa-location-dot"></i>
                                                블루스퀘어 신한카드홀
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_works_7.png" alt="">
                                <div class="no-main-works-link">
                                    <ul class="">
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--white">자세히 보기</a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--secondary">
                                                예매하기
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="no-main-works-info --t-center">
                                <div class="no-main-works-info__etc no-pd-sm--t">
                                    <h3 class="no-heading-md">
                                        WYBH 콘서트 Good bye 2024</h3>
                                    <div class="no-main-works-info__tag no-pd-xs--t">
                                        <ul class="">
                                            <li class=" tag">
                                                <i class="fa-solid fa-timer"></i>
                                                2024.11.29 - 2025.05.18
                                            </li>
                                            <li class="tag">
                                                <i class="fa-regular fa-location-dot"></i>
                                                블루스퀘어 신한카드홀
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_works_8.png" alt="">
                                <div class="no-main-works-link">
                                    <ul class="">
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--white">자세히 보기</a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--secondary">
                                                예매하기
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="no-main-works-info --t-center">
                                <div class="no-main-works-info__etc no-pd-sm--t">
                                    <h3 class="no-heading-md">지킬 앤 하이드 - 20주년</h3>
                                    <div class="no-main-works-info__tag no-pd-xs--t">
                                        <ul class="">
                                            <li class=" tag">
                                                <i class="fa-solid fa-timer"></i>
                                                2024.11.29 - 2025.05.18
                                            </li>
                                            <li class="tag">
                                                <i class="fa-regular fa-location-dot"></i>
                                                블루스퀘어 신한카드홀
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_works_9.png" alt="">
                                <div class="no-main-works-link">
                                    <ul class="">
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--white">자세히 보기</a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--secondary">
                                                예매하기
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="no-main-works-info --t-center">
                                <div class="no-main-works-info__etc no-pd-sm--t">
                                    <h3 class="no-heading-md">2024 소수빈 연말 콘서트</h3>
                                    <div class="no-main-works-info__tag no-pd-xs--t">
                                        <ul class="">
                                            <li class=" tag">
                                                <i class="fa-solid fa-timer"></i>
                                                2024.11.29 - 2025.05.18
                                            </li>
                                            <li class="tag">
                                                <i class="fa-regular fa-location-dot"></i>
                                                블루스퀘어 신한카드홀
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <figure>
                                <img src="<?=IMG_PATH?>/main/main_works_10.png" alt="">
                                <div class="no-main-works-link">
                                    <ul class="">
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--white">자세히 보기</a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="no-work-btn no-work-btn__fill--secondary">
                                                예매하기
                                                <i class="fa-regular fa-arrow-up-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="no-main-works-info --t-center">
                                <div class="no-main-works-info__etc no-pd-sm--t">
                                    <h3 class="no-heading-md">
                                        존 카메론 미첼 내한 공연 ［John Cameron Mitchell @ X-mas］</h3>
                                    <div class="no-main-works-info__tag no-pd-xs--t">
                                        <ul class="">
                                            <li class=" tag">
                                                <i class="fa-solid fa-timer"></i>
                                                2024.11.29 - 2025.05.18
                                            </li>
                                            <li class="tag">
                                                <i class="fa-regular fa-location-dot"></i>
                                                블루스퀘어 신한카드홀
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <div class="no-main-works-button">
                        <div class="swiper-button-next swiper-button">
                            <i class="fa-light fa-arrow-right-long"></i>
                        </div>
                        <div class="swiper-button-prev swiper-button">
                            <i class="fa-light fa-arrow-left-long"></i>
                        </div>
                    </div>

                    <div class="no-pd-md--t">
                        <div class="swiper-pagination no-main-works-pagination">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="no-main-works-gradient">
            <img src="<?=IMG_PATH?>/icon/main_work_gradient_1.png" alt="">
            <img src="<?=IMG_PATH?>/icon/main_work_gradient_2.png" alt="">
        </div>
    </section>

    <section class="no-main-service no-pd-2xl--b">
        <div class="no-container-2xl">
            <h2 class="no-display-md no-section-title">시설 및 서비스</h2>
            <div class="cnt no-pd-xl--t">
                <ul class="visible-smooth">
                    <li>
                        <a href="#">
                            <div class="wrap">
                                <div class="icon">
                                    <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M48 16H64V64H16V48H26.6667V37.3333H37.3333V26.6667H48V16Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="txt">
                                    <span>Floor Guide</span>
                                    <h4 class="no-heading-md">층별 안내</h4>
                                </div>
                            </div>
                            <div class="arrow">
                                <i class="fa-regular fa-arrow-right"></i>
                            </div>

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="wrap">
                                <div class="icon">
                                    <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.5701 62.1595C24.3856 58.7835 32.5027 49.24 38.2443 42.9939C37.7339 42.7801 37.2016 42.6231 36.6569 42.5257C36.5234 42.5018 36.3887 42.4737 36.253 42.4414C30.0193 48.124 21.0838 55.7213 17.8405 58.4266C16.5947 59.4639 15.0615 61.5793 16.7385 63.2577C18.4155 64.9362 20.5333 63.4044 21.5701 62.1595Z"
                                            fill="white" />
                                        <path
                                            d="M36.7053 42.2442C38.7067 42.6026 40.5217 43.7396 42.1953 45.638C47.6034 51.668 54.0301 59.2317 56.4738 62.1593C57.5111 63.405 59.627 64.9383 61.3054 63.2613C62.9839 61.5843 61.4492 59.467 60.2034 58.4296C57.2759 55.986 49.6719 49.6038 43.6802 44.1541C39.9994 40.8063 41.3238 40.5605 38.7326 37.9688C29.8071 29.041 25.5418 24.8604 19.0715 18.392C18.0355 17.3556 17.4251 17.3858 16.8794 17.933C16.4448 18.3676 15.8253 19.4145 17.4979 22.0373C21.0757 27.6505 29.328 40.9237 36.7053 42.2442Z"
                                            fill="white" />
                                        <path
                                            d="M44.0328 37.3252C45.6274 36.5058 47.3087 36.3463 49.0691 36.2045C50.0048 36.1161 50.8718 35.6746 51.4935 34.9697L63.9958 20.8015L63.8899 20.6621L63.7505 20.5566L53.2227 30.3359C53.2227 30.3359 53.0488 30.4797 52.8274 30.2626C52.6061 30.0456 52.7561 29.8731 52.7561 29.8731L62.4716 19.2879L62.3648 19.1441L62.221 19.0378L51.666 28.7758C51.666 28.7758 51.5007 28.933 51.2827 28.7174C51.0647 28.5018 51.2247 28.3341 51.2247 28.3341L60.959 17.7752L60.8526 17.6315L60.7089 17.5246L50.128 27.2445C50.128 27.2445 49.9502 27.3883 49.7384 27.1731C49.5266 26.958 49.6651 26.7778 49.6651 26.7778L59.4396 16.2453L59.3342 16.1059L59.1943 16L45.0309 28.5056C44.3261 29.1273 43.8846 29.994 43.7961 30.9296C43.6524 32.69 43.4947 34.3713 42.6754 35.9654C42.4837 36.3334 41.2691 37.6055 39.9668 38.9059C40.3011 39.336 40.5977 39.7942 40.8532 40.2753C42.2336 38.8881 43.6485 37.5226 44.0328 37.3252Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="txt">
                                    <span>Food & Beverage</span>
                                    <h4 class="no-heading-md">F&B</h4>
                                </div>
                            </div>
                            <div class="arrow">
                                <i class="fa-regular fa-arrow-right"></i>
                            </div>

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="wrap">
                                <div class="icon">
                                    <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_195_20891)">
                                            <path
                                                d="M55.7504 34.5772V23.7315C55.7504 19.472 52.3141 16 48.0546 16H32.52C28.2605 16 24.8242 19.472 24.8242 23.7315V34.5772C26.7571 35.651 28.0815 37.6555 28.0815 40.0179V44.3132C28.9763 43.4541 30.2291 42.8814 31.5893 42.8814H48.9853C50.3455 42.8814 51.5625 43.4183 52.4931 44.3132V40.0179C52.4931 37.6555 53.8175 35.6152 55.7504 34.5772Z"
                                                fill="white" />
                                            <path
                                                d="M48.9858 44.4561H31.5899C29.657 44.4561 28.082 46.031 28.082 47.9639V58.9885H52.4937V47.9639C52.4937 46.031 50.9187 44.4561 48.9858 44.4561Z"
                                                fill="white" />
                                            <path
                                                d="M21.8525 35.3643C19.2753 35.3643 17.1992 37.4403 17.1992 40.0175C17.1992 42.2367 18.7742 44.1696 20.9576 44.5634L21.6019 44.7065V58.9884H23.5348V63.9996H25.2171L26.5057 58.9884V40.0175C26.5057 37.4403 24.4296 35.3643 21.8525 35.3643Z"
                                                fill="white" />
                                            <path
                                                d="M58.7197 35.3643C56.1425 35.3643 54.0664 37.4403 54.0664 40.0175V58.9884H54.1022L55.3908 63.9996H57.0731V58.9884H59.006V44.7065L59.6503 44.5634C61.8337 44.1338 63.4087 42.2009 63.4087 40.0175C63.3729 37.4403 61.2968 35.3643 58.7197 35.3643Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_195_20891">
                                                <rect width="46.1745" height="48" fill="white"
                                                    transform="translate(17.1992 16)" />
                                            </clipPath>
                                        </defs>
                                    </svg>


                                </div>
                                <div class="txt">
                                    <span>Seating Chart</span>
                                    <h4 class="no-heading-md">좌석배치도</h4>
                                </div>
                            </div>
                            <div class="arrow">
                                <i class="fa-regular fa-arrow-right"></i>
                            </div>

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="wrap">
                                <div class="icon">
                                    <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_502_22879)">
                                            <path
                                                d="M24.2086 23C27.2603 23 29.9359 24.6714 31.3436 27.157C31.9776 26.3427 33.1166 25.807 34.4168 25.807C35.717 25.807 36.856 26.3427 37.49 27.157C38.8869 24.6714 41.5518 23 44.6142 23C49.1381 23 52.813 26.6641 52.813 31.1746C52.813 32.7281 52.3725 34.1852 51.6203 35.4173C51.6633 35.428 51.7062 35.4494 51.7492 35.4816C52.0071 35.6637 52.0823 36.0173 51.8997 36.2744C51.6095 36.703 51.2764 37.0994 50.9111 37.4529C50.9111 37.4636 50.9218 37.4744 50.9218 37.4744C51.0615 38.2243 51.4698 38.7922 52.1468 39.1671C52.2543 39.2207 52.2758 39.3921 52.179 39.5314C52.1361 39.5957 52.0823 39.6707 52.0286 39.735L63.3006 52.1951C63.4295 52.3344 63.5477 52.5058 63.6445 52.6665C64.3751 53.9629 63.9238 55.6021 62.6344 56.3307C61.3342 57.0592 59.6901 56.6092 58.9594 55.3236L50.6747 40.7528C50.578 40.7849 50.492 40.8171 50.3953 40.8492C50.2341 40.8921 50.0729 40.8171 50.0622 40.6992C49.9225 39.9492 49.5142 39.3814 48.8372 39.0064C48.8157 38.9957 48.805 38.985 48.7942 38.9636C48.3214 39.1886 47.8379 39.3707 47.3221 39.4993C47.2791 39.51 47.2254 39.5207 47.1824 39.5207C46.9353 39.5207 46.7096 39.36 46.6344 39.1136C45.9897 39.2743 45.3234 39.36 44.625 39.36C40.1011 39.36 36.4262 35.6959 36.4262 31.1853C36.4262 30.3925 36.5444 29.6211 36.7593 28.8926C36.7271 28.8176 36.7056 28.7319 36.7056 28.6462C36.7056 27.8212 35.6633 27.1355 34.4168 27.1355C33.1811 27.1355 32.128 27.8319 32.128 28.6462C32.128 28.7319 32.1065 28.8176 32.0743 28.8926C32.2892 29.6211 32.4074 30.3925 32.4074 31.1853C32.4074 35.6959 28.7324 39.36 24.2086 39.36C19.6848 39.36 16.0098 35.6959 16.0098 31.1853C16.0098 26.6748 19.6848 23 24.2086 23ZM61.2912 55.1521C61.9682 55.1521 62.5269 54.6057 62.5269 53.92C62.5269 53.2451 61.9789 52.688 61.2912 52.688C60.6142 52.688 60.0555 53.2344 60.0555 53.92C60.0555 54.595 60.6035 55.1521 61.2912 55.1521ZM44.6142 38.0422C48.4074 38.0422 51.5021 34.9673 51.5021 31.1746C51.5021 27.3819 48.4181 24.3071 44.6142 24.3071C40.8211 24.3071 37.7264 27.3819 37.7264 31.1746C37.7264 34.9673 40.8103 38.0422 44.6142 38.0422ZM24.2086 38.0422C28.0017 38.0422 31.0964 34.9673 31.0964 31.1746C31.0964 27.3819 28.0125 24.3071 24.2086 24.3071C20.4047 24.3071 17.3208 27.3819 17.3208 31.1746C17.3208 34.9673 20.4047 38.0422 24.2086 38.0422Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_502_22879">
                                                <rect width="48" height="33.6842" fill="white"
                                                    transform="matrix(-1 0 0 1 64 23)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                                <div class="txt">
                                    <span>Opera Glasses</span>
                                    <h4 class="no-heading-md">오페라글라스</h4>
                                </div>
                            </div>
                            <div class="arrow">
                                <i class="fa-regular fa-arrow-right"></i>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="wrap">
                                <div class="icon">
                                    <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_195_20888)">
                                            <path
                                                d="M15.5996 16V63.0588H17.2652H25.4419L20.8236 45.4165C37.7826 36.2334 38.9182 17.829 38.9182 17.829V17.6766H40.281V17.829C40.281 17.829 41.4166 36.2334 58.3756 45.4165L53.7573 63.0588H61.934H63.5996V16H15.5996ZM24.1927 19.6199C24.1927 19.6199 24.3062 32.6897 18.4766 41.4156L24.1927 19.6199ZM22.2242 63.0588H20.3693L18.5144 47.055C19.2715 48.9602 22.2242 63.0588 22.2242 63.0588ZM19.0065 42.7873C19.0065 42.7873 27.8267 31.6228 30.628 18.8578C30.628 18.8578 31.3472 33.0326 19.0065 42.7873ZM48.5712 18.8578C51.3725 31.6228 60.1927 42.7873 60.1927 42.7873C47.852 33.0326 48.5712 18.8578 48.5712 18.8578ZM58.8299 63.0588H56.975C56.975 63.0588 59.9277 48.9602 60.7226 47.055L58.8299 63.0588ZM55.0065 19.6199L60.7226 41.4156C54.893 32.6897 55.0065 19.6199 55.0065 19.6199Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_195_20888">
                                                <rect width="48" height="47.0588" fill="white"
                                                    transform="translate(15.5996 16)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                                <div class="txt">
                                    <span>Venue Rental</span>
                                    <h4 class="no-heading-md">대관 안내</h4>
                                </div>
                            </div>
                            <div class="arrow">
                                <i class="fa-regular fa-arrow-right"></i>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="wrap">
                                <div class="icon">
                                    <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M57.7637 30.8539C57.7637 33.4212 57.1455 35.8281 55.9091 38.0745C54.7185 40.3209 52.8181 42.1318 50.2079 43.5072C47.6435 44.8825 44.3922 45.5702 40.454 45.5702H32.4173V64H22.8008V16H40.454C44.1632 16 47.3229 16.6418 49.9331 17.9255C52.5433 19.2092 54.4896 20.9742 55.7718 23.2206C57.0998 25.467 57.7637 28.0115 57.7637 30.8539ZM40.0419 37.7994C42.6978 37.7994 44.6669 37.2034 45.9492 36.0115C47.2314 34.7736 47.8725 33.0544 47.8725 30.8539C47.8725 26.1776 45.2623 23.8395 40.0419 23.8395H32.4173V37.7994H40.0419Z"
                                            fill="white" />
                                    </svg>



                                </div>
                                <div class="txt">
                                    <span>Parking Guide</span>
                                    <h4 class="no-heading-md">주차안내</h4>
                                </div>
                            </div>
                            <div class="arrow">
                                <i class="fa-regular fa-arrow-right"></i>
                            </div>

                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </section>
    <section class="no-main-sponsor no-pd-2xl--b">
        <div class="no-container-2xl">
            <div class="cnt">
                <ul class="">
                    <li class="">
                        <h4 class="no-heading-sm no-section-title">SPONSOR</h4>
                        <div class="no-pd-sm--t">
                            <ul>
                                <li>
                                    <div class="logo">
                                        <a href="#" class="tag">
                                            <div class="--toggle-images">
                                                <img src="<?=IMG_PATH?>/logo/sponsor_img_1_light.png"
                                                    class="--light-img" alt="">
                                                <img src="<?=IMG_PATH?>/logo/sponsor_img_1_dark.png" class="--dark-img"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="">
                        <h4 class="no-heading-sm no-section-title">INTERPARK THEATER VENUE</h4>
                        <div class="no-pd-sm--t">
                            <ul>
                                <li>
                                    <div class="logo">
                                        <a href="#" class="tag">
                                            <div class="--toggle-images">
                                                <img src="<?=IMG_PATH?>/logo/sponsor_img_4_light.png"
                                                    class="--light-img" alt="">
                                                <img src="<?=IMG_PATH?>/logo/sponsor_img_4_dark.png" class="--dark-img"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="logo">
                                        <a href="#" class="tag">
                                            <div class="--toggle-images">
                                                <img src="<?=IMG_PATH?>/logo/sponsor_img_2_light.png"
                                                    class="--light-img" alt="">
                                                <img src="<?=IMG_PATH?>/logo/sponsor_img_2_dark.png" class="--dark-img"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="logo">
                                        <a href="#" class="tag">
                                            <div class="--toggle-images">
                                                <img src="<?=IMG_PATH?>/logo/sponsor_img_3_light.png"
                                                    class="--light-img" alt="">
                                                <img src="<?=IMG_PATH?>/logo/sponsor_img_3_dark.png" class="--dark-img"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="no-main-marquee no-pd-md--y">
        <div class="no-main-marquee__container" wb-data="marquee" duration="50">
            <div class="no-main-marquee__content no-display-lg">
                <span>BLUE SQAURE ·</span>
                <span>BLUE SQAURE ·</span>
                <span>BLUE SQAURE ·</span>
                <span>BLUE SQAURE ·</span>
            </div>
        </div>
    </section>
</main>

<?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>