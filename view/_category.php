<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả sản phẩm</title>
    <link rel="stylesheet" href="./public/css/buy.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./public/image/logo/favicon.webp" type="image/x-icon">
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
                            <span>Tất cả sản phẩm</span>
                        </strong>
                    </li>
                </ul>
            </div>
        </section>
        <section class="container_category">
            <div class="menu_left">
                <div class="menu">
                    <h3>DANH MỤC SẢN PHẨM</h3>
                    <div>Trang chủ</div>
                    <div>Giới thiệu</div>
                    <div>Menu</div>
                    <div>Món ăn nổi bật</div>
                    <div>Món ngon mỗi ngày</div>
                    <div>Tin tức</div>
                    <div>Liên hệ</div>
                </div>
                <div class="menu">
                    <h3>CHỌN MỨC GIÁ</h3>
                    <div><input type="checkbox">Dưới 100.000đ</div>
                    <div><input type="checkbox">Từ 100.000đ - 200.000đ</div>
                    <div><input type="checkbox">Từ 200.000đ - 500.000đ</div>
                    <div><input type="checkbox">Từ 500.000đ - 1 triệu</div>
                    <div><input type="checkbox">Trên 1 triệu</div>
                </div>
                <div class="menu">
                    <h3>HƯƠNG VỊ</h3>
                    <div><input type="checkbox">Mặn</div>
                    <div><input type="checkbox">Ngọt</div>
                    <div><input type="checkbox">Chua</div>
                    <div><input type="checkbox">Cay</div>
                </div>
                <div class="menu">
                    <h3>KÍCH CỠ</h3>
                    <div><input type="checkbox">Lớn</div>
                    <div><input type="checkbox">Vừa</div>
                    <div><input type="checkbox">Nhỏ</div>
                </div>
            </div>
            <div class="menu_right">
                <div class="title">
                    <h3>TẤT CẢ MÓN ĂN</h3>
                    <div><b>Sắp xếp:</b>&nbspMặc định  <i class='bx bx-chevron-down'></i></div>
                </div>
                <div class="product">
                    <div class="swiper-wrapper">
                    <?php for ($i=0; $i < 10; $i++) {  ?>
                        <div class="swiper-slide">
                            <a href="#">
                            <img src="./public/image/products/<?php echo $productList[$i]['image']?>.jpg" alt=""> 
                             </a>
                             <div class="product-info">
                             <a href="#" class="product-name"><?php echo $productList[$i]['name']?></a>
                                 <div class="price-box">
                                 <span class="price"><?php echo $productList[$i]['price']?>.000đ</span>
                                <span class="compare-price"><?php echo $productList[$i]['price'] + 50?>.000đ</span>
                                 </div>
                             </div>
                             <div class="btn-card">
                             <a href="detail.php?id=<?php echo $productList[$i]['id']; ?>" class="btn-more" data-product-id="1">Xem chi tiết</a>
                             </div>
                        </div>
                        <?php  } ?> 
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