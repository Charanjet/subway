<?php include './layout/header.php'; 
$conn = mysqli_connect($host, $username, $password, $database);
// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<main id="homePageNew" class="body_container">
    <div class="d_wrapper">
        <div class="swiper hero_slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
            data-delay="5000">
            <div class="slider_button_panel">
                <div class="play_paused_slider">
                    <button class="paused_button" aria-label="Pause carousel"></button>
                    <button class="play_button" aria-label="Play carousel" disabled=""></button>
                </div>
                <button class="swiper-button-prev hero_prev_button swiper-button-disabled"
                    aria-label="previous hero slide" disabled=""></button>
                <div class="hero_pagination swiper-pagination-fraction swiper-pagination-horizontal"><span
                        class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">5</span>
                </div>
                <button class="swiper-button-next hero_next_button" aria-label="next hero slide"></button>
            </div>

            <div class="swiper-wrapper hero_wrapper"
                style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                <section
                    class="promotions_wrapper swiper-slide header overlay withBoxShadow noPromoDes black swiper-slide-active"
                    style="width: 1349px; margin-right: 10px;">
                    <div class="promotions_h_text">
                        <div>
                            <h1 tabindex="0" class="title">New chef-crafted subs? YESWAY. </h1>
                            <p class="decreption">
                                Deliciously made with premium ingredients, it’s a whole new way to Subway®.
                            </p>
                        </div>
                        <div>
                            <a href="#" class="fullwidth button" type="button">Learn More</a>
                            <a href="#" class="fullwidth button" type="button">Order Now</a>
                        </div>
                    </div>
                    <div class="promotions_image">
                        <picture tabindex="0">
                            <source srcset="./assets/img/Subway_W3_YesWay_FWH_024665_375X211_EN.jpg"
                                media="(max-width: 767px)" alt="4x Italian Stack">
                            <img src="./assets/img/Subway_W3_YesWay_FWH_024665_505X485_EN.jpg" format="jpg"
                                alt="4x Italian Stack">
                        </picture>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="d_wrapper">
        <section class="heading_title">
            <h3 class="title">Menu</h3>
        </section>
        <div id="menu-slider">
            <div
                class="swiper menu_slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                
                <ul class="swiper-wrapper menu_wrapper" role="region" aria-label="menu carousel"
                    style="transform: translate3d(0px, 0px, 0px);">

                    <?php 
                            $sql = "SELECT * FROM products";
                            $result = mysqli_query($conn, $sql);
                            // Check if there are any products in the database
                            if (mysqli_num_rows($result) > 0) {
                                // Loop through each row and fetch the product data
                                while ($row = mysqli_fetch_assoc($result)) {
                                   ?>
                                    <li class="component_menu swiper-slide singleSlide swiper-slide-active"
                                        style="width: 419px; margin-right: 16px;">
                                        <div class="component_menu_link">
                                            <input type="hidden" name="product_id" value="<?= $row['id']?>">
                                            <picture class="component_menu_card_image">
                                                <source srcset="./assets/img/<?= $row['image']?>" media="(min-width: 800px)">
                                                <img src="./assets/img/<?= $row['image']?>">
                                            </picture>
                                            <p class="component_menu_label"><?= $row['title']?></p>
                                        </div>
                                        <button class="button addToCartBtn">Add to Cart</button>
                                    </li>
                                <?php     
                                }
                            }
                        ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="d_wrapper">
        <section class="heading_title">
            <h3 class="title">Rewards and Deals</h3>
        </section>
    </div>
    <div class="d_wrapper">
        <div class="swiper menu_slider offers_promoslider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
            id="id_carousel_">
            <div class="d_wrapper swiper-wrapper menu_wrapper threeColumn mobileScroll"
                style="transform: translate3d(0px, 0px, 0px);">

                <section class="promotions_wrapper swiper-slide withBoxShadow black swiper-slide-active"
                    style="width: 419px; margin-right: 16px;">
                    <div class="promotions_h_text">
                        <div>
                            <h2 class="title">Buy any Footlong, get one 50% off</h2>
                            <p class="decreption">
                                Get 50% off a footlong when you buy a footlong. At participating restaurants. Use code
                                OFF50 for app/online orders.</p>
                            <button class="disclaimerText transparentButton">Terms &amp; Conditions Apply</button>
                            <div class="fullwidthPromo">
                                <div class="promo_modal_content">
                                    <button class="close" title="close"></button>
                                    <div class="d_wrapper withGape">
                                        <section class="rich_text wordBreak color_black">
                                            <p>Redeemable at participating restaurants. 50% off Sub of equal/lesser
                                                price. Extras additional. 1 use per order. No additional discounts.
                                                Excludes Lobster. Expires 08/06/2023.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="fullwidth button">ORDER NOW</a>
                        </div>
                    </div>
                    <div class="promotions_image">
                        <picture tabindex="0">
                            <source srcset="./assets/img/RDCarouselPromoBOGO50ENCAMOB.jpg" media="(max-width: 767px)">
                            <img src="./assets/img/RDCarouselPromoBOGO50ENCADSK.jpg" format="jpg"></picture>
                    </div>
                </section>
                <section class="promotions_wrapper swiper-slide withBoxShadow swiper-slide-next"
                    style="width: 419px; margin-right: 16px;">
                    <div class="promotions_h_text">
                        <div>
                            <h2 class="title">Register in the app for exclusive deals! </h2>
                            <p class="decreption">
                            </p>
                        </div>
                        <div>
                            <a href="#" class="fullwidth button">DOWNLOAD THE APP</a>
                        </div>
                    </div>
                    <div class="promotions_image">
                        <picture tabindex="0">
                            <source srcset="./assets/img/IOS-375x211-SOCT-w-Crispy-Onions.jpg"
                                media="(max-width: 767px)" alt="Footlong SOCT">
                            <img src="./assets/img/Desktop-Tablet-750x422-SOCT-w-Crispy-Onions.jpg" format="jpg"
                                alt="Footlong SOCT"></picture>
                    </div>
                </section>
                <section class="promotions_wrapper swiper-slide withBoxShadow"
                    style="width: 419px; margin-right: 16px;">
                    <div class="promotions_h_text">
                        <div>
                            <h2 class="title">Delicious Delivered</h2>
                            <p class="decreption">
                                Delivery now available on the Subway® app.
                            </p>
                        </div>
                        <div>
                            <a href="#" class="fullwidth button">ORDER NOW</a>
                        </div>
                    </div>
                    <div class="promotions_image">
                        <picture tabindex="0">
                            <source
                                srcset="./assets/img/SUBWAY_W1_Direct-Delivery_024227_Carousel-Promo_375x211_EN_1X.jpg"
                                media="(max-width: 767px)" alt="ORDER WITH THE SUBWAY® APP">
                            <img src="./assets/img/SUBWAY_W1_Direct-Delivery_024227_Carousel-Promo_750x422_EN_X2.jpg"
                                format="jpg" alt="ORDER WITH THE SUBWAY® APP"></picture>
                    </div>
                </section>
            </div>
            <button class="swiper-button-prev menu_prev_button swiper-button-disabled swiper-button-lock"
                title="previous promo slide" tabindex="0" disabled=""></button>
            <button class="swiper-button-next menu_next_button swiper-button-disabled swiper-button-lock"
                title="next promo slide" tabindex="0" disabled=""></button>
        </div>
    </div>

    </div>

    <div id="BestSeller" class="bestseller" style="">
        <div id="bestseller-component">
            <div class="content">
                <div class="gridTitle gridTitle-menu" style="">
                    <div>
                        <h4 id="bestSellerAnalytics" class="Analytics-Title">Best Seller</h4>
                        <input id="bestSellerCategoryId" name="bestSellerCategoryId" type="hidden" value="816">
                        <input id="defaultStoreId" name="defaultStoreId" type="hidden" value="32256-0">
                    </div>
                </div>

                <div id="bestSellerItems">
                    <input type="hidden" id="num-bestsellers" value="4">
                    <div id="Best-Seller" role="group">
                        <div class="col-xs-12 col-md-12">
                            <div class="favorites-carousel slick-initialized slick-slider" id="bestsellerCarousel"
                                role="region">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track"
                                        style="opacity: 1; width: 1256px; transform: translate3d(0px, 0px, 0px);"
                                        role="group"><a href="#"
                                            class="bestseller_link slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false" style="width: 284px;" tabindex="0">
                                            <div class="bestseller-outofstock">
                                                <div id="bestsellerProductDetail">
                                                    <div class="sub">
                                                        <img src="./assets/img/CNSteakCheese_6S_PCP_Desktop.png">
                                                    </div>
                                                    <div class="Oven-Roasted-Chicken">
                                                        <span data-name="Steak &amp; Cheese">Steak &amp; Cheese</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="#" class="bestseller_link slick-slide slick-active"
                                                data-slick-index="1" aria-hidden="false" style="width: 284px;"
                                                tabindex="0">
                                                <div class="bestseller-outofstock">
                                                    <div id="bestsellerProductDetail">
                                                        <div class="sub">
                                                            <img src="./assets/img/1004_SOCT_6SPCP_Desktop.png">
                                                        </div>
                                                        <div class="Oven-Roasted-Chicken">
                                                            <span data-name="Sweet Onion Chicken Teriyaki">Sweet Onion
                                                                Chicken Teriyaki</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#" class="bestseller_link slick-slide slick-active"
                                                data-slick-index="2" aria-hidden="false" style="width: 284px;"
                                                tabindex="0">
                                                <div class="bestseller-outofstock">
                                                    <div id="bestsellerProductDetail">
                                                        <div class="sub">
                                                            <img src="./assets/img/N_TurkeyBreast_6S_Desktop.png">
                                                        </div>
                                                        <div class="Oven-Roasted-Chicken">
                                                            <span data-name="Turkey Breast">Turkey Breast</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#" class="bestseller_link slick-slide slick-active"
                                                data-slick-index="3" aria-hidden="false" style="width: 284px;"
                                                tabindex="0">
                                                <div class="bestseller-outofstock">
                                                    <div id="bestsellerProductDetail">
                                                        <div class="sub">
                                                            <img src="./assets/img/CNColdCutCombo_6S_PCP_Desktop.png">
                                                        </div>
                                                        <div class="Oven-Roasted-Chicken">
                                                            <span data-name="Cold Cut Combo">Cold Cut Combo</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="content arrowWrapper">
                            <button class="slickPrev slick-disabled" id="slickPrev" tabindex="0" aria-label="Previous"
                                role="button" style="display: none;"></button>
                            <button class="slickNext" id="slickNext" tabindex="0" aria-label="Next" role="button"
                                style="display: none;"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d_wrapper withGape">
        <section class="component_50_50 withButton">
            <div class="component_50_50_text">
                <h3 class="title">Cater to every craving</h3>
                <p class="discreption">
                    From parties to meetings, you can always cater with Subway® restaurants.
                </p>
                <a href="#" class="button component_50_50_button">VIEW CATERING MENU </a>
            </div>
            <div class="component_50_50_image">
                <picture tabindex="0">
                    <img src="./assets/img/Catering_Hockey-Night_3369-S.jpg" format="jpg"
                        alt="Subs, drinks, chips and cookies"></picture>

            </div>
        </section>
    </div>
    <div class="d_wrapper withGape">
        <section class="component_slim withBorder mobileOnly">
            <div class="slim_text">
                <div>
                    <h3 class="title">Order how you want, when you want</h3>
                    <p class="decreption"> Getting Subway® has never been easier!</p>
                </div>
                <div class="slim_btn">
                    <a href="#" class="button">START ORDER</a>

                    <section class="component_DownloadIcons ">
                        <div class="slim_store store_button Compoent_download_cta">
                            <a href="#"><img src="./assets/img/app_store.png" alt="AppStore"></a>
                            <a href="#" class="slim_store_link"><img src="./assets/img/google_play.png"
                                    alt="Google Play"></a>
                        </div>
                    </section>

                </div>
            </div>
            <div class="slim_image">
                <picture tabindex="0">
                    <source srcset="./assets/img/app-promo.png" media="(max-width: 767px)">
                    <img src="./assets/img/app-promo.png" format="jpg"></picture>
            </div>
        </section>
    </div>
</main>


<?php include './layout/footer.php'; ?>