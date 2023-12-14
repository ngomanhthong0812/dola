    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="./public/css/home.css">
        <link rel="shortcut icon" href="./public/image/logo/favicon.webp" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <!-- header design -->
    <?php include_once './view/inc/header.php'?>

        <!-- section slide design -->
        <section class="slide" id="slide">
            <div class="container">
                <img src="./public/image/background/bg1.jpg" alt="">
                <div class="content-slider">
                    <span class="title">Dola Restaurant</span>
                    <span class="content">Món ăn đa dạng</span>
                    <a href="dat_ban.html">ĐẶT BÀN NGAY</a>
                </div>
            </div>
        </section>

        <!-- section about design -->
        <section class="about" id="about">
            <div class="container">
                <div class="content-left">
                    <span class="title-small">Về chúng tôi</span>
                    <span class="title">Dola Restaurant</span>
                    <span class="content">Nhà hàng chúng tôi luôn luôn đặt khách hàng lên hàng đầu, tận tâm phục vụ, mang lại cho khách hàng những trãi nghiệm tuyệt với nhất. Các món ăn với công thức độc quyền sẽ mang lại hương vị mới mẻ cho thực khách. Dola Restaurant xin chân thành cảm ơn.</span>
                    <div class="button-block">
                        <span class="button-line-left"></span>
                        <span class="button-text">Xem thêm</span>
                        <span class="button-line-right"></span>
                    </div>
                </div>

                <div class="content-right">
                    <img src="./public/image/background/about_image.jpg" alt="">
                </div>
            </div>
        </section>

        <!-- section outstanding food design -->
        <section class="menu_top" id="menu_top">
            <div class="container">
                <div class="title">
                    <h2>Danh mục nổi bật</h2>
                </div>

                <div class="swiper-wrapper">
                    <div class="item">
                        <a href="#">
                            <div class="image">
                                <img src="./public/image/products/beef.jpg" alt="">
                            </div>
                            <h4 class="title">Món bò</h4>
                            <span class="content">Các món bò được chế biến tinh tế với hương vị đặc biệt nhất</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="image">
                                <img src="./public/image/products/chicken.jpg" alt="">
                            </div>
                            <h4 class="title">Món gà</h4>
                            <span class="content">Các món gà được chế biến tinh tế với hương vị đặc biệt nhất</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="image">
                                <img src="./public/image/products/pork.jpg" alt="">
                            </div>
                            <h4 class="title">Món heo</h4>
                            <span class="content">Các món heo được chế biến tinh tế với hương vị đặc biệt nhất</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="image">
                                <img src="./public/image/products/fish.jpg" alt="">
                            </div>
                            <h4 class="title">Món cá</h4>
                            <span class="content">Các món cá được chế biến tinh tế với hương vị đặc biệt nhất</span>
                        </a>
                    </div>
                </div>
                <div class="btn-category">
                    <span class="btn-item"></span>
                    <span class="btn-item"></span>
                </div>
            </div>
        </section>

        <!-- section products design -->
        <section class="menu_mid" id="menu_mid">
            <div class="container">
                <div class="title">
                    <h2>Thực đơn của chúng tôi</h2>
                </div>
                <ul class="nav-menu">
                    <li class="item"><a href="#">Khai vị</a></li>
                    <li class="item"><a href="#">Món chính</a></li>
                    <li class="item"><a href="#">Canh - Tiềm - Súp</a></li>
                    <li class="item"><a href="#">Cơm - mì - cháo</a></li>
                    <li class="item"><a href="#">Bánh tráng miệng</a></li>
                    <li class="item"><a href="#">Đồ uống</a></li>
                </ul>

                <div class="card-box">
                    <?php for ($i=0; $i < 10; $i++) {  ?>
                        <div class="item">
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

        <!-- section featured dishes design -->
        <section class="menu_bottom" id="menu_bottom">
            <div class="container">
                <div class="title-index">
                    <h2><a href="#">Món ăn nổi bật</a></h2>
                </div>
                <div class="wrapper">
                <?php for ($i=5; $i < 10; $i++) {  ?>
                    <div class="items">
                        <a href="#">
                        <img src="./public/image/products/<?php echo $productList[$i]['image']?>.jpg" alt=""> 
                        </a>
                        <div class="product-info">
                            <a href="#" class="product-name"><?php echo $productList[$i]['name']?></a>
                            <div class="price-box">
                                <span class="price"><?php echo $productList[$i]['price']?>.000đ</span>
                                <span class="compare-price"><?php echo $productList[$i]['price'] + 30?>.000đ</span>
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

        <!-- section banner design -->
        <section class="banner" id="banner">
            <div class="container">
                <div class="banner-item">
                    <img src="./public/image/banner/banner1.jpg" alt="">
                    <div class="content">
                        <a href="#">
                            <span class="title1">Dola Restaurant</span>
                            <span class="title2">Món ăn đa dạng</span>
                        </a>
                        
                    </div>
                </div>

                <div class="banner-item">
                    <img src="./public/image/banner/banner2.jpg" alt="">
                    <div class="content">
                        <a href="#">
                            <span class="title1">Dola Restaurant</span>
                            <span class="title2">Hương vị đặc biệt</span>
                        </a>
                    </div>
                </div>

                <div class="banner-item">
                    <img src="./public/image/banner/banner3.jpg" alt="">
                    <div class="content">
                        <a href="#">
                            <span class="title1">Dola Restaurant</span>
                            <span class="title2">Công thức độc quyền</span>
                        </a>
                    </div>
                </div>

                <div class="banner-item">
                    <img src="./public/image/banner/banner4.jpg" alt="">
                    <div class="content">
                        <a href="#">
                            <span class="title1">Dola Restaurant</span>
                            <span class="title2">Đảm bảo chất lượng</span>
                        </a>
                    </div>
                </div>
            </div>
            
        </section>

        <!-- section num design -->
        <section class="section-num" id="num">
            <div class="container">
                <div class="item">
                    <img src="./public/image/icon/thong_ke1.jpg" alt="">
                    <div class="content">
                        <span class="num">                   
                            <span class="counter">8+</span>                  
                        </span>
                        <span class="title">Cửa hàng</span>
                    </div>
                </div>

                <div class="item">
                    <img src="./public/image/icon/thong_ke2.jpg" alt="">
                    <div class="content">
                        <span class="num">                   
                            <span class="counter">200+</span>                  
                        </span>
                        <span class="title">Nhân viên</span>
                    </div>
                </div>

                <div class="item">
                    <img src="./public/image/icon/thong_ke3.jpg" alt="">
                    <div class="content">
                        <span class="num">                   
                            <span class="counter">5000+</span>                  
                        </span>
                        <span class="title">Khách hàng</span>
                    </div>
                </div>

                <div class="item">
                    <img src="./public/image/icon/thong_ke4.jpg" alt="">
                    <div class="content">
                        <span class="num">                   
                            <span class="counter">50+</span>                  
                        </span>
                        <span class="title">Món ăn</span>
                    </div>
                </div>
            </div> 
        </section>

        <!-- section blog design -->
        <section class="section_blog" id="section_blog">
            <div class="container">
                <div class="title-index">
                    <h2><a href="#">Tin tức</a></h2>
                </div>

                <div class="wrapper">
                    <div class="item-blog">
                        <div class="blog-thumb">
                            <div class="time-post">6/01/2023</div>
                            <a href="#" class="thumb"><img src="./public/image/background/canh-ca-nau-me-2-7edb.jpg" alt=""></a>
                        </div>
                        
                        <div class="block-content">
                            <div class="time-post">
                                <span>Đăng bởi: Admin Dola</span>
                            </div>
                            <a href="#">Mách bạn công thức làm canh cá nấu mẻ thơm ngon đậm vị</a>
                            <p>Canh cá nấu mẻ&nbsp;là món ăn dân dã, quen thuộc trong mỗi mâm cơm gia đình Việt. Mùa hè nắng...</p>
                            <div class="button-block">
                                <span class="button-line-left"></span>
                                <span class="button-text">Xem thêm</span>
                                <span class="button-line-right"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item-blog">                   
                        <div class="block-content">
                            <div class="time-post">
                                <span>Đăng bởi: Admin Dola</span>
                            </div>
                            <a href="#">Tuyển tập 8 món xào đơn giản, tiết kiệm thời gian cho chị em</a>
                            <p>Cùng Bếp nhà Dola khám phá công thức làm 8 món xào đơn giản, nhanh gọn trong bài viết dưới đây...</p>
                            <div class="button-block">
                                <span class="button-line-left"></span>
                                <span class="button-text">Xem thêm</span>
                                <span class="button-line-right"></span>
                            </div>
                        </div>
                        <div class="blog-thumb">
                            <div class="time-post">6/01/2023</div>
                            <a href="#" class="thumb"><img src="./public/image/background/dua-xao-long-me-ga-3b27.jpg" alt=""></a>
                        </div>
                    </div>

                    <div class="item-blog">
                        <div class="blog-thumb">
                            <div class="time-post">6/01/2023</div>
                            <a href="#" class="thumb"><img src="./public/image/background/kheo-leo-co-meo-nau-an-de-co-bua.jpg" alt=""></a>
                        </div>
                        
                        <div class="block-content">
                            <div class="time-post">
                                <span>Đăng bởi: Admin Dola</span>
                            </div>
                            <a href="#">1001 món ngon mỗi ngày - Giải quyết vấn đề"Hôm nay ăn gì?"</a>
                            <p>Bữa sáng là một trong những bữa ăn quan trọng trong ngày, giúp cung cấp năng lượng.</p>
                            <div class="button-block">
                                <span class="button-line-left"></span>
                                <span class="button-text">Xem thêm</span>
                                <span class="button-line-right"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section review design -->
        <section class="review" id="review">
            <div class="container">
                <div class="swiper-wrapper">
                    <div class="review-item">
                        <div class="info">
                            <img src="./public/image/avata/danhgia_1.jpg" alt="">
                            <div class="name">
                                <h5>Hoàng Dung</h5>
                                <span>Nhân viên văn phòng</span>
                            </div>
                            <div class="icon"><i class="fa-solid fa-quote-right"></i></div>
                        </div>

                        <div class="content">
                            <p>Món ăn ở đây hầu hết đều rất ngon, khẩu vị phù hợp với tôi, tôi sẽ luôn ủng hộ nhà hàng Dola Restaurant</p>
                        </div>
                    </div>
                    
                </div>
                <div class="btn-review">
                    <button class="btn-item"></button>
                    <button class="btn-item"></button>
                    <button class="btn-item"></button>
                </div>
            </div>
        </section>

        <?php include_once './view/inc/footer.php'?>

        <!-- button scroll to top design -->
        <button id="toTop"><i class="fa-solid fa-chevron-up"></i></button>

        <script src="home.js"></script>
    </body>
    </html>