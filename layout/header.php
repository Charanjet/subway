<!DOCTYPE html>
<html class="cms">
<head>
    <title>Home | Subway®</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="./assets/css/font.css">
    <link rel="stylesheet" href="./assets/css/app-ltr.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/media_library.css">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</head>
<?php include __DIR__."/config.php"; 
$loggedIn = false;
$total_cart_quantity = 0;
if (isset($_SESSION['username'])) {
    $loggedIn = true;
    $user_id = $_SESSION['username'];
    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        echo json_encode(['status' => 'error', 'message' => 'Database connection error']);
        exit;
    }
    $cart_sel = "SELECT sum(quantity) as cart_quantity FROM cart WHERE user_id = $user_id";
    $cartitems = mysqli_query($conn, $cart_sel);
    while($row = mysqli_fetch_assoc($cartitems)){
        $total_cart_quantity = $row['cart_quantity'];
    }
}
?>
<body id="stick-to" class="<?= $loggedIn?'isLoggedIn':'isLoggedOut'; ?> cms" style="overflow-y: initial;">
        <header class="header-sticky">
            <nav class="navbar cms">
                <div class="navbar_left">
                    <button class="navbar_left_button" role="navigation" title="Toggle navigation" aria-expanded="false"
                        onclick="humbuggerClick()">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar_logo" href="<?= $base_url?>">
                        <img class="primary_logo" src="./assets/img/subway-logo.png" alt="Logo" title="home">
                    </a>
                    <div class="navbar_menu_items">
                        <ul>
                            <li>
                                <a href="<?= $base_url?>menu.php" class="Menu">Menu</a>
                            </li>
                            <li>
                                <a href="<?= $base_url?>locator.php">Find a Subway®</a>
                            </li>
                            <li>
                                <a href="<?= $base_url?>promotions.php" class="deals">Rewards & Deals</a>
                            </li>
                            <li>
                                <a href="<?= $base_url?>giftcard.php">Gift Cards</a>
                            </li>
                            <li>
                                <a href="<?= $base_url?>catering.php">Catering</a>
                            </li>
                        </ul>
                    </div>
                </div>    
                <div class="navbar_right">
                    <a href="<?= $base_url?>menu.php" class="button start_order">
                        Start Order
                    </a>
                    <?php if ($loggedIn) { ?>
                        <!-- Display welcome message and user profile link if logged in -->
                        <div class="account_info">
                            <a href="<?= $base_url?>profile.php" class="account_loggedIn">
                                <img src="./assets/img/logged-in.png" alt="loggedIn">
                            </a>
                            <a href="<?= $base_url?>logout.php" class="logout_link">
                                Logout
                            </a>
                        </div>
                        <?php } else { ?>
                            <!-- Show login link if not logged in -->
                            <div class="account_info">
                                <a href="<?= $base_url?>login.php" class="account_logged">
                                    <img src="./assets/img/05uiicon24pxaccountloggedin3x.png" alt="Profile">
                                </a>
                                <a href="<?= $base_url?>login.php" class="login_link">
                                    Login
                                </a>
                            </div>
                            <?php } ?>
                                <a href="<?= $base_url?>orders.php" class="cart_bag full <?= $total_cart_quantity>0?'d-block':'d-none' ?> position-relative" aria-label="Item in your cart">
                                    <img src="./assets/img/05uiiconbagfull3x.png" >
                                    <div class="badge-bagcount totalCartQuantity"><?= $total_cart_quantity  ?></div>
                                </a>
                                <a href="<?= $base_url?>orders.php" class="cart_bag empty <?= $total_cart_quantity>0?'d-none':'d-block' ?>">
                                    <img src="./assets/img/05uiicon24pxbagempty3x.png" alt="Bag Empty">
                                </a>
                </div>
            </nav>
        </header>
            <!-- Add a button to trigger the popup -->
            
            <!-- Modal Popup -->
            <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="infoModalLabel">Popup Title</h5> -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary d-none open-modal-btn" data-toggle="modal" data-target="#infoModal"></button>
            <div class="page-main-banner">