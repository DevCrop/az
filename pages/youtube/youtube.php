<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.visual.php';
?>


<!-- contents -->
<main class="no-sub">
    <section class="no-sub-youtube">
        <div class="no-section-lg">
            <div class="no-container-xl">
                <div class="--section-title-wrap ">
                    <hgroup>
                        <h2 class="no-heading-xl --fw-700">
                            Youtube
                        </h2>
                        <p class="no-body-xl">
                            복잡한 내용 이제는 유튜브에서 쉽고 간단하게 보실 수 있습니다
                        </p>
                    </hgroup>
                </div>
                <div class="--cnt">
                    <ul class="">
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                        <li class="">
                            <a href="#">
                                <figure class="no-radius-sm">
                                    <img src="<?=IMG_PATH?>/common/img_placeholder.png" alt="">
                                </figure>
                                <div class="txt no-mg-sm--t">
                                    <h4 class="no-heading-xs">
                                        이번 달 놓치면 끝! 최신 정책자금 한눈에 ...
                                    </h4>
                                </div>
                            </a>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </div>

            </div>
        </div>
    </section>
</main>









<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>