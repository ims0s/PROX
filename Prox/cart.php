<?php
    session_start();
    
    include("item_insert.php");

    if(isset($_POST['chekout']))
    {
        unset($_SESSION['cart']);
        
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cart</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/css/Roboto.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---2-Register.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Responsive-Client-Two.css">
    <link rel="stylesheet" href="assets/css/Shopping-Grid.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product-1.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <header style="height: 20vh;">
    <?php include('./header.php'); ?>
    </header>
    <div></div>
    <section>
        <div class="content">
            <div class="row g-0">
                <div class="col-md-12 col-lg-8">
                    <div class="items">
                       
                        <?php
                            $total=0;
                           if(isset($_SESSION)){
                            if(isset($_SESSION['cart'])){
                            $product_id= array_column($_SESSION['cart'],'item_id');
                            $result = get_item();
                            
                            while($row = $result->fetch_assoc()){
                                foreach($product_id as $id){
                                    if($row['item_id']==$id){
                                        insert_cart($row['item_name'],$row['item_price'],$row['item_img']);
                                        $total = $total + $row['item_price'];
                                    }
                                }
                            }
                        }else 
                        {
                            
                        }
                    } 
                        ?>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <form method="post" action ="">
                    <div class="summary">
                        <h3>Summary</h3>
                        <h4><span class="text">Subtotal</span><span class="price"><?php echo "$$total";?></span></h4>
                        <h4><span class="text">Discount</span><span class="price">$0</span></h4>
                        <h4><span class="text">Shipping</span><span class="price"> FREE</span></h4>
                        <h4><span class="text">Total</span><span class="price"><?php echo "$$total";?></span></h4><button class="btn btn-primary btn-lg d-block w-100" type="submit" name ="chekout">Checkout</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
    <script src="assets/js/Swiper-Slider-Card-For-Blog-Or-Product.js"></script>
</body>

</html>