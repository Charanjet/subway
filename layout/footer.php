</div>
<footer class="component_footer">
        <nav class="footer_main">
            <div class="footer_main_item">
                <div class="footer_title">Get To Know Us</div>
                <ul>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/menu.php">View National Menu</a>
                    </li>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/">Gift Cards</a>
                    </li>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/">Download the App</a>
                    </li>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/">About Us</a>
                    </li>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/">History</a>
                    </li>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/">News</a>
                    </li>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer_main_item">
                <div class="footer_title column_without_title"></div>
                <ul>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/">
                            Nutrition
                        </a>
                    </li>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/">
                            Never Miss Lunch
                        </a>
                    </li>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/">
                            Subway Series
                        </a>
                    </li>
                    <li class="footer_link">
                        <a href="<?= $base_url?>/">
                            Careers
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer_main_item">
                <div class="footer_title column_without_title"></div>
                <ul>
                </ul>
            </div>

            <div class="footer_main_item feed_language footer_link">
                <div class="media">
                    <ul>
                        <li class="media_link">
                            <a href="#" class="no_decoration">
                                <img class="linkImage" src="./assets/img/FranchisingLogo.png">Franchise With Subway</a>
                        </li>
                        <li class="media_link">
                            <a href="#" class="no_decoration">
                                <img class="linkImage" src="./assets/img/SubwayCaresFoundationLogo.png"
                                    alt="Subway Cares Foundation">
                                Subway Cares Foundation
                            </a>
                        </li>
                        <li class="media_link">
                            <a href="#" class="no_decoration">
                                <img class="linkImage" src="./assets/img/Desktop.png" alt="Partners:The Feed">
                                Partners:The Feed
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="horizontal_footer">
            <nav class="footer_sub_menu">
                <div class="footer_bottom_menu">
                    <ul>
                        <li><a href="#"> Privacy </a>
                        </li>
                        <li><a href="#"> Terms of
                                Use </a></li>
                        <li><a href="" class="optanon-toggle-display footer-link-text"> Cookie Settings </a></li>
                        <li><a href="#"> FAQs </a></li>
                        <li><a href="#">Unsubscribe </a></li>
                    </ul>
                </div>
                <div class="footer_social_media">
                    <ul>
                        <li>
                            <a class="icon facebook" href="#" title="facebook">
                                <img src="./assets/img/facebook.svg" alt="facebook">
                            </a>
                        </li>
                        <li>
                            <a class="icon instagram" href="#" title="instagram">
                                <img src="./assets/img/instagram.svg" alt="instagram">
                            </a>
                        </li>
                        <li>
                            <a class="icon twitter" href="#" title="twitter">
                                <img src="./assets/img/twitter.svg" alt="twitter">
                            </a>
                        </li>
                        <li>
                            <a class="icon youtube" href="#"
                                title="youtube">
                                <img src="./assets/img/youtube.svg" alt="youtube">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="component_footer_legal">
                All Rights Reserved. </div>
        </div>
    </footer>
    <div id="subway-spinner" class="loader-overlay" style="display: none;">
        <div class="loader-container-small loader-position-center">
            <img id="subway-spinner-logo" alt="Loading..." src="./assets/img/Subway_Spinner_105.gif">
            <div id="spinner-text" class="spinner-text">We are working on the quickest location to serve you.</div>
        </div>
    </div>
<script>
    $(document).ready(function() {
        // Attach click event to the anchor tag with ID 'addToCartBtn'
        $(".addToCartBtn").on("click", function(event) {
            event.preventDefault(); // Prevent the default click behavior (e.g., navigating to the href)

            // Get the product ID from the hidden input field
            var productId = $(this).parent().find("input[name='product_id']").val();
            // Send AJAX request to addcart.php with the product ID
            $.ajax({
                url: "<?= $base_url ?>addtocart.php",
                method: "POST",
                data: { product_id: productId},
                success: function(response) {
                    // Handle the response from addcart.php (e.g., show a success message)
                    response = JSON.parse(response);
                    if(response.status=="success"){
                        alert(response.message);
                        if(response.cart_quantity>0){
                            $(".cart_bag.full").removeClass('d-none');
                            $(".cart_bag.full").addClass('d-block');
                            $(".cart_bag.empty").removeClass('d-block');
                            $(".cart_bag.empty").addClass('d-none');
                            $(".totalCartQuantity").html(response.cart_quantity);
                        }
                    }else{
                        $('#infoModal .modal-body').html(response.message);
                        $('.open-modal-btn').click();
                    }
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the AJAX request
                    console.error("Error adding product to cart: " + error);
                }
            });
        });
    });
</script>
</body>
</html>
