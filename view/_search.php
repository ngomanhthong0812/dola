<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="./public/css/buy.css">
    <link rel="shortcut icon" href="./public/image/logo/favicon.webp" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- header design -->
    <?php include_once './view/inc/header.php'?>

    <div class="bodywrap">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="home.php">Trang chủ</a>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                    </li>
                    <li class="intro">
                        <strong>
                            <span>Tìm kiếm</span>
                        </strong>
                    </li>
                </ul>
            </div>
        </section>
        <section class="container_category">
            <div class="menu_right" style="width: 100%;">
                <div class="title">
                    <h3 style="font-size: 25px;">Có # kết quả phù hợp</h3>
                </div>
                <div class="product">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="./public/image/products/1.jpg" alt=""> 
                             </a>
                             <div class="product-info">
                                 <a href="#" class="product-name">Salad rau mùa sốt cam</a>
                                 <div class="price-box">
                                     <span class="price">68.000đ</span>
                                     <!-- <span class="compare-price">70.000đ</span> -->
                                 </div>
                             </div>
                             <div class="btn-card">
                                 <a href="#" class="btn-more">Xem chi tiết</a>
                             </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include_once './view/inc/footer.php'?>

    <!-- button scroll to top design -->
    <button id="toTop"><i class="fa-solid fa-chevron-up"></i></button>

    <script src="./public/js/main.js"></script>
</body>
</html>