<?php include './layout/header.php'; 
$conn = mysqli_connect($host, $username, $password, $database);
// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<div class="d_wrapper withRoundBorder">
    <section class="heading_title">
        <h3 class="title">Menu</h3>
    </section>
</div>
<div class="d_wrapper withGape">
    <section class="component_slim black">
        <div class="slim_text">
            <div>
                <h3 class="title">2 is better than 1.</h3>
                <p class="decreption"> Get 50% off a Footlong when you buy a Footlong with code OFF50</p>
                <button class="disclaimerText transparentButton">Terms &amp; Conditions Apply</button>
                <div class="fullwidthPromo">
                    <div class="promo_modal_content">
                        <button class="close" title="close"></button>
                        <div class="d_wrapper withGape">
                            <section class="rich_text color_black">
                                <p>Redeemable at participating restaurants. 50% off Sub of equal/lesser price.
                                    Extras
                                    additional. 1 use per order. No additional discounts. Excludes Lobster. Expires
                                    08/06/2023.</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slim_btn">
                <a href="#" class="button">ORDER NOW</a>
            </div>
        </div>
        <div class="slim_image">
            <picture tabindex="0">
                <source srcset="./assets/img/MP_PromoSlim_BOGO50_EN-CA_MOB.jpg" media="(max-width: 767px)" >
                <img src="./assets/img/MP_PromoSlim_BOGO50_EN-CA_DSK.jpg" format="jpg" ></picture>
        </div>
    </section>
</div>

<div class="d_wrapper withRoundBorder sideGap">
    <div id="national-menu-landing" class="national-menu-landing">
        <div class="d_wrapper section_wrapper">
            <section class="component_menu doubleSlide">
                <a class="component_menu_link" href="#">
                    <picture class="component_menu_card_image">
                        <source srcset="./assets/img/SubwaySeries_Cat_T2x1_Desktop.png" media="(min-width: 800px)">
                        <img src="./assets/img/SubwaySeries_Cat_T2x1_Desktop.png" >
                    </picture>
                    <p class="component_menu_label">Subway® Series</p>
                    <div class="menu-subtitle">Chef crafted so you don't have to.</div>
                </a>
            </section>
            <section class="component_menu doubleSlide">
                <a class="component_menu_link" href="#">
                    <picture class="component_menu_card_image">
                        <source srcset="./assets/img/ClassicSandwiches_Cat_T2X1_Desktop.png" media="(min-width: 800px)">
                        <img src="./assets/img/ClassicSandwiches_Cat_T2X1_Desktop.png" >
                    </picture>
                    <p class="component_menu_label">Classic Sandwiches</p>
                    <div class="menu-subtitle">Choose a classic favourites and customize it.</div>
                </a>
            </section>
            <?php 
                            $sql = "SELECT * FROM products";
                            $result = mysqli_query($conn, $sql);
                            // Check if there are any products in the database
                            if (mysqli_num_rows($result) > 0) {
                                // Loop through each row and fetch the product data
                                while ($row = mysqli_fetch_assoc($result)) {
                                   ?>
                                    <section class="component_menu singleSlide">
                                        <input type="hidden" name="product_id" value="<?= $row['id']?>">
                                        <div class="component_menu_link">
                                            <picture class="component_menu_card_image">
                                                <source srcset="./assets/img/<?= $row['image']?>"
                                                    media="(min-width: 800px)">
                                                <img src="./assets/img/<?= $row['image']?>" >
                                            </picture>
                                            <p class="component_menu_label">Signature Rice Bowls</p>
                                        </div>
                                        <button class="button addToCartBtn">Add to Cart</button>
                                    </section>                                    
                                <?php     
                                }
                            }
                        ?>
            <!-- <section class="component_menu singleSlide">
                <a class="component_menu_link" href="#">
                    <picture class="component_menu_card_image">
                        <source srcset="./assets/img/SIGNATUREGRILLEDRICEWRAPS_Cat_T1x1_Desktop.jpg"
                            media="(min-width: 800px)">
                        <img src="./assets/img/SIGNATUREGRILLEDRICEWRAPS_Cat_T1x1_Desktop.jpg" >
                    </picture>
                    <p class="component_menu_label">Signature Grilled Rice Wraps</p>
                </a>
            </section>
            <section class="component_menu singleSlide">
                <a class="component_menu_link" href="#">
                    <picture class="component_menu_card_image">
                        <source srcset="./assets/img/ValueMenu_Cat_T1x1_Desktop.jpg" media="(min-width: 800px)">
                        <img src="./assets/img/ValueMenu_Cat_T1x1_Desktop.jpg" >
                    </picture>
                    <p class="component_menu_label">Under $5 Menu</p>
                </a>
            </section>
            <section class="component_menu singleSlide">
                <a class="component_menu_link" href="#">
                    <picture class="component_menu_card_image">
                        <source srcset="./assets/img/L_SaladCategory_Black_desk_534x534_v2.png"
                            media="(min-width: 800px)">
                        <img src="./assets/img/L_SaladCategory_Black_desk_534x534_v2.png" >
                    </picture>
                    <p class="component_menu_label">Salads</p>
                </a>
            </section>
            <section class="component_menu singleSlide">
                <a class="component_menu_link" href="#">
                    <picture class="component_menu_card_image">
                        <source srcset="./assets/img/L_Beauty_SidekickEggBaconBreakfast_Black_Desktop_534x534.jpg"
                            media="(min-width: 800px)">
                        <img src="./assets/img/L_Beauty_SidekickEggBaconBreakfast_Black_Desktop_534x534.jpg" >
                    </picture>
                    <p class="component_menu_label">Breakfast</p>
                </a>
            </section>
            <section class="component_menu singleSlide">
                <a class="component_menu_link" href="#">
                    <picture class="component_menu_card_image">
                        <source srcset="./assets/img/790_Sides_Cat1x1_Desktop.jpg" media="(min-width: 800px)">
                        <img src="./assets/img/790_Sides_Cat1x1_Desktop.jpg" >
                    </picture>
                    <p class="component_menu_label">Sides</p>
                </a>
            </section>
            <section class="component_menu singleSlide">
                <a class="component_menu_link" href="#">
                    <picture class="component_menu_card_image">
                        <source srcset="./assets/img/DrinksDigital_Cat_T1x1_Desktop.jpg" media="(min-width: 800px)">
                        <img src="./assets/img/DrinksDigital_Cat_T1x1_Desktop.jpg" >
                    </picture>
                    <p class="component_menu_label">Drinks</p>
                </a>
            </section> -->
        </div>
    </div>
</div>

<div class="d_wrapper withGape">
    <section class="component_50_50 withButton " id="id_50_50_50942">
        <div class="component_50_50_text">
            <h3 class="title">Cater to every craving</h3>
            <p class="discreption">
                From parties to meetings, you can always cater with Subway® restaurants.
            </p>
            <a href="#" class="button component_50_50_button">View Catering
                Menu</a>
        </div>
        <div class="component_50_50_image">
            <picture tabindex="0">
                <img src="./assets/img/ENCater5050IMG.png" format="jpg" ></picture>
        </div>
    </section>
</div>

<div class="d_wrapper withGape">
    <section class="component_slim withBorder mobileOnly" data-startonlineorder="1" id="id_slim_50ba1">
        <div class="slim_text">
            <div>
                <h3 class="title">Order how you want, when you want</h3>
                <p class="decreption"> Getting Subway® has never been easier!</p>
            </div>
            <div class="slim_btn">
                <a href="# class="button">START ORDER</a>
                <section class="component_DownloadIcons" id="id_downloadicons_4142e">
                    <div class="slim_store store_button Compoent_download_cta">
                        <a href="#">
                            <img src="./assets/img/app_store.png"></a>
                        <a href="#"
                            class="slim_store_link">
                            <img src="./assets/img/google_play.png"></a>
                    </div>
                </section>
            </div>
        </div>
        <div class="slim_image">
            <picture tabindex="0">
                <source srcset="./assets/img/app-promo.png" media="(max-width: 767px)" >
                <img src="./assets/img/app-promo.png" format="jpg" >
            </picture>
        </div>
    </section>
</div>
<?php include './layout/footer.php'; ?>