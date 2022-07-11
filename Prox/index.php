<?php
    session_start();
    include("item_insert.php");

    if(isset($_POST['add']))
    {
        if(isset($_SESSION['cart']))
        {
            $item_array_id = array_column($_SESSION['cart'],"item_id");
            
            if(in_array($_POST['add'],$item_array_id))
            {
                echo "<script>alert('item is already in the cart..!')</script>";
                echo "<scrip>window.location ='index.php'</script> ";
            }else
            {
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'item_id'=>$_POST['add']
                );
    
                $_SESSION['cart'][$count]=$item_array;
                

            }
        }
        else
        {
            $item_array = array(
                'item_id'=>$_POST['add']
            );

            $_SESSION['cart'][0]=$item_array;
                        
        }
    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
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

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    



    <header class="masthead">
        <?php include('./header.php'); ?>
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading active" style="color: #ffffff;">PRO X</h1>
                        <p class="intro-text" style="color: #ffffff;"><br>The supplements you are looking for<br><br></p><a class="btn btn-link btn-circle" role="button" href="#about" style="color: rgb(8,8,8);"><i class="fa fa-angle-double-down animated" style="color: rgb(8, 8, 8);"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>






    
    <section style="background: #ffffff;">
        <form method="post" action="">
        <h1 style="color: rgb(0,0,0);text-align: center;">Our Products</h1><div class="shopping-grid">
    <div class="container">
    <h3 class="" align="center">Newest Trends</h3>
    <div class="row">
        
        <?php
             $r=get_item();

            while($row=$r->fetch_assoc()){
                //print_r($row);
                insert_item($row['item_name'],$row['item_price'],$row['item_img'],$row['item_id']);
            }

            //insert_item("Women's Protien",15," .\assets\img\Whey-1.jpg");
        ?>

</div>
</div>
        </form>
    </section>
    <section class="text-center content-section" id="about" style="background: var(--bs-gray-100);color: rgb(255,255,255);">
        <div class="container">
            <h1 style="color: rgb(0,0,0);">Brands</h1>
            <div class="row" style="color: rgb(0,0,0);">
                <div class="col">
                    <div class="blog-slider">
                        <div class="blog-slider__wrp swiper-wrapper">
                            <div class="blog-slider__item swiper-slide">
                                <div></div>
                                <div class="blog-slider__img"><img src="assets/img/brand-1.png"></div>
                                <div class="blog-slider__content"><div class="blog-slider__title">A Supplements</div><div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div><a class="class=&quot;blog-slider__button" href="#">READ MORE</a></div>
                            </div>
                            <div class="blog-slider__item swiper-slide">
                                <div></div>
                                <div class="blog-slider__img"><img src="assets/img/brand-2.png"></div>
                                <div class="blog-slider__content"><span class="blog-slider__code">26 December 2019</span><div class="blog-slider__title">Syntrax</div><div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div><a class="class=&quot;blog-slider__button" href="#">READ MORE</a></div>
                            </div>
                            <div class="blog-slider__item swiper-slide">
                                <div></div>
                                <div class="blog-slider__img"><img src="assets/img/brand-3.jpg"></div>
                                <div class="blog-slider__content"><span class="blog-slider__code">26 December 2019</span><div class="blog-slider__title">Dyamatize</div><div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div><a class="class=&quot;blog-slider__button" href="#">READ MORE</a></div>
                            </div>
                            <div class="blog-slider__pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;ProX 2021</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
    <script src="assets/js/Swiper-Slider-Card-For-Blog-Or-Product.js"></script>
</body>

</html>