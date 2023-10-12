<?php include './layout/header.php'; ?>
<div class="d_wrapper">
    <div class="swiper hero_slider no-button swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
        data-delay="5000" id="id_slider_v2_f004d">
        <div class="slider_button_panel" style="display: none;">
            <div class="play_paused_slider">
                <button class="paused_button" aria-label="Pause carousel"></button>
                <button class="play_button" aria-label="Play carousel" disabled=""></button>
            </div>
            <button class="swiper-button-prev hero_prev_button swiper-button-disabled swiper-button-lock"
                aria-label="previous hero slide" disabled=""></button>
            <div class="hero_pagination swiper-pagination-fraction swiper-pagination-horizontal swiper-pagination-lock">
                <span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">1</span></div>
            <button class="swiper-button-next hero_next_button swiper-button-disabled swiper-button-lock"
                aria-label="next hero slide" disabled=""></button>
        </div>
        <div class="swiper-wrapper hero_wrapper"
            style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <section
                class="promotions_wrapper swiper-slide black header noPromoDes overlay withBoxShadow swiper-slide-active"
                data-promo="" id="id_promotion_91d" style="width: 1349px; margin-right: 10px;">
                <div class="promotions_h_text">
                    <div>
                        <h1 tabindex="0" class="title">Earn rewards on the Subway® you crave</h1>
                        <div class="rich_text"> <span style="color:#fff">Join Subway MyWay® Rewards and earn on all the
                                things you love to eat. Sign up here or Download the App to create your account. It’s
                                free to join.</span></div>
                    </div>
                    <div>
                        <a href="#" class="fullwidth button">JOIN NOW</a>
                    </div>
                </div>
                <div class="promotions_image">
                    <picture tabindex="0">
                        <source
                            srcset="./assets/img/RewardsandDeals_PromoFullWidthHero_EarnRewards_Mob_EN-CA.jpg"
                            media="(max-width: 767px)" >
                        <img src="./assets/img/RewardsandDeals_PromoFullWidthHero_EarnRewards_Dsk_EN-CA.jpg"
                            format="jpg" ></picture>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="d_wrapper withGape withBackground">
    <div class="component_group_title " id="id_grouptitle_8e29b">
        <h2 class="title">Subway MyWay® Rewards</h2>
        <p class="group_details_text">
            Enjoy the flexibility of using your $2 Rewards no matter what menu item you choose. You earned it! Check out
            <a href="#" target="_blank">FAQs</a> for the nitty-gritty.
        </p>
    </div>
</div>

<div class="d_wrapper twoColumn withBackground withBoxShadow withRoundBorder sideGap">
    <section class="component_card image " id="id_card_e7571">
        <div class="component_card_image image ">
            <picture tabindex="0">
                <source srcset="./assets/img/DownloadApp_2CardUp_Rewards_Mob.jpg"
                    media="(max-width: 767px)" >
                <img src="./assets/img/DownloadApp_2CardUp_Rewards_Dsk.jpg"
                    format="jpg" ></picture>
        </div>
        <div class="component_card_text">
            <h3 class="title">Getting Subway® has never been easier!</h3>
            <p class="component_card_description">Access your rewards, save your favorites, order from anywhere, and get
                notifications so you never miss a deal. All in the Subway® App. </p>
            <div class="component_card_applybtn">
                <a href="#" class="underline button">Download the App</a>
                <a href="#" class="expandIcon" aria-label="" target="">
                    <img src="/Assets/RemoteOrder/img/Union.png" alt="external link" title="external link">
                </a>
            </div>
        </div>
    </section>
    <section class="component_card image " id="id_card_0fb30">
        <div class="component_card_image image ">
            <picture tabindex="0">
                <source srcset="./assets/img/RewardsandDeals_2CardUp_HowitWorks_Mob.jpg"
                    media="(max-width: 767px)" >
                <img src="./assets/img/RewardsandDeals_2CardUp_HowitWorks_Dsk.jpg"
                    format="jpg" ></picture>
        </div>
        <div class="component_card_text">
            <h3 class="title">How it works </h3>
            <div class="rich_text">
                <ul style="color:#000">
                    <li>$1 spent = 4 tokens</li>
                    <li>Every 200 tokens earns you a $2 reward to redeem on your next Subway® purchase</li>
                    <li>Plus, get exclusive bonus offers all year round!</li>
                </ul>
            </div>
        </div>
    </section>
</div>

<div class="d_wrapper twoColumn withBackground withGape">
    <div class="component_button backgroundGreen">
        <a href="<?= $base_url?>/signin.php" class="button">SIGN UP FOR REWARDS</a>
    </div>
    <div class="component_button backgroundWhite">
        <a href="<?= $base_url?>/login.php" class="button">ALREADY A MEMBER? SIGN IN</a>
    </div>
</div>

<div class="d_wrapper">
    <section class="heading_title  withButton viewAllDesktop" id="id_titlelinkcomponent_80c8b">
        <h3 class="title">Deals &amp; Offers</h3>
        <a href="<?= $base_url?>/login.php" class="button underline  withButton viewAllDesktop">Sign in for member exclusive
            deals</a>
    </section>

    <div class="swiper menu_slider offers_promoslider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
        id="id_carousel_">
        <div class="d_wrapper swiper-wrapper menu_wrapper threeColumn mobileScroll"
            style="transform: translate3d(0px, 0px, 0px);">
            <section class="promotions_wrapper swiper-slide withBoxShadow black swiper-slide-active" data-promo=""
                id="id_promotion_cc990" style="width: 413px; margin-right: 25px;">
                <div class="promotions_h_text">
                    <div>
                        <h3 class="title">Buy any Footlong, get one 50% off</h3>
                        <p class="decreption">
                            Get 50% off a footlong when you buy a footlong. At participating restaurants. Use code OFF50
                            for app/online orders.

                        </p>
                        <button class="disclaimerText transparentButton">Terms
                            &amp; Conditions Apply</button>
                        <div id="id_promotion_cc990fullwidthPromoId" class="fullwidthPromo">
                            <div class="promo_modal_content">
                                <button class="close" title="close"></button>
                                <div class="d_wrapper withGape">
                                    <section class="rich_text wordBreak color_black">
                                        <p>Redeemable at participating restaurants. 50% off Sub of equal/lesser price.
                                            Extras additional. 1 use per order. No additional discounts. Excludes
                                            Lobster. Expires 08/06/2023.</p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="fullwidth button">Order Now </a>
                    </div>
                </div>
                <div class="promotions_image">
                    <picture tabindex="0">
                        <source srcset="./assets/img/RDCarouselPromoBOGO50ENCAMOB.jpg"
                            media="(max-width: 767px)" >
                        <img src="./assets/img/RDCarouselPromoBOGO50ENCADSK.jpg"
                            format="jpg" ></picture>
                </div>
            </section>
            <section class="promotions_wrapper withBoxShadow swiper-slide swiper-slide-next" style="width: 413px; margin-right: 25px;">
                <div class="promotions_h_text">
                    <div>
                        <h3 class="title">Register in the app for exclusive deals! </h3>
                        <p class="decreption"></p>
                    </div>
                    <div>
                        <a href="#" class="fullwidth button">DOWNLOAD THE APP</a>
                    </div>
                </div>
                <div class="promotions_image">
                    <picture tabindex="0">
                        <source srcset="./assets/img/IOS-375x211-SOCT-w-Crispy-Onions.jpg"
                            media="(max-width: 767px)" alt="Footlong SOCT">
                        <img src="./assets/img/Desktop-Tablet-750x422-SOCT-w-Crispy-Onions.jpg"
                            format="jpg" alt="Footlong SOCT"></picture>
                </div>
            </section>
        </div>
        <button class="swiper-button-prev menu_prev_button swiper-button-disabled swiper-button-lock"
            title="previous promo slide" tabindex="0" disabled=""></button>
        <button class="swiper-button-next menu_next_button swiper-button-disabled swiper-button-lock"
            title="next promo slide" tabindex="0" disabled=""></button>
    </div>

    <section class="heading_title  withButton viewAllMobile" id="id_titlelinkcomponent_35f08">

        <a href="#" class="button underline  withButton viewAllMobile">Sign in for member exclusive
            deals</a>
    </section>
</div>

<div class="d_wrapper withGape">
    <section class="component_slim withBorder" id="id_slim_fa84f">
        <div class="slim_text">
            <div>
                <h3 class="title">Member Exclusives</h3>
                <p class="decreption"> As a Subway MyWay® Rewards member, you’ll get bonus offers and other member-only
                    perks. Download the App to easily access all your benefits today.</p>
            </div>
            <div class="slim_btn">
                <a href="#" class="button">DOWNLOAD THE APP</a>
            </div>
        </div>
        <div class="slim_image">
            <picture tabindex="0">
                <source srcset="./assets/img/RewardsandDeals_Slim_MemberExclusive_Mob.jpg"
                    media="(max-width: 767px)" alt="Member Exclusive">
                <img src="./assets/img/RewardsandDeals_Slim_MemberExclusive_Dsk.jpg"
                    format="jpg" alt="Member Exclusive"></picture>
        </div>
    </section>
</div>

<div class="d_wrapper withGape withBackground">
    <div class="component_group_title withButton contentCenter">
        <h3 class="title">WANT TO LEARN MORE?</h3>
        <p class="group_details_text">
            All the finer details of the Subway MyWay® Rewards program can be found here.
        </p>
        <a href="#" target="" class="button group_button">PROGRAM TERMS</a>
    </div>
</div>

<?php include './layout/footer.php'; ?>