<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt hàng</title>
    <link rel="stylesheet" href="./public/css/buy.css">
    <link rel="shortcut icon" href="./public/image/logo/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header design -->
    <?php include_once './view/inc/header.php' ?>

    <div class="bodywrap">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="home.html">Trang chủ</a>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                    </li>
                    <li class="home">
                        <a href="home.html">Món ăn nổi bật</a>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                    </li>
                    <li class="intro">
                        <strong>
                            <span>Đặt hàng</span>
                        </strong>
                    </li>
                </ul>
            </div>
        </section>

        <section class="product-layout">
            <div class="container">
                <div class="col-lg-9">
                    <?php foreach ($productList as $product) { ?>
                        <?php if ($product['id'] == $_GET['id']) { ?>
                            <div class="buy">
                                <div class="img-product" id="product-image">
                                    <img src="./public/image/products/<?php echo $product['image']; ?>.jpg" alt="">
                                </div>
                                <div class="order">
                                    <h1 class="title-product" id="product-name">
                                        <?php echo $product['name'] ?>
                                    </h1>
                                    <div class="price-box">
                                        <span class="special-price" id="product-price">
                                            <?php echo $product['price'] ?>.000đ
                                        </span>
                                        <span class="old-price">Giá tại nhà hàng: <span class="price product-price-old"
                                                id="price_old">
                                                <?php echo $product['price'] ?>.000d
                                            </span></span>
                                        <span class="save-price">Tiết kiệm: <span class="price product-price-save"
                                                id="save_price">0d</span></span>
                                    </div>
                                    <form action="cart.php" method="post" class="clearfix form-group">
                                        <input type="hidden" name="_method" value="create">
                                        <label class="sl section">Số lượng</label>
                                        <div class="add remove muahang">
                                            <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                                            <input type="hidden" name="productName" value="<?php echo $product['name']; ?>">
                                            <input type="hidden" name="productImage" value="<?php echo $product['image']; ?>">
                                            <input type="hidden" name="productPrice" value="<?php echo $product['price']; ?>">
                                           
                                            <input type="number" style="width: 60px; font-size: 15px; margin: 0px" value="1" name="quantity">
                                           
                                        </div>
                                        <div class="btn-box">
                                            <button class="orange" type="submit">thêm vào giỏ hàng</button>
                                            <a href="dat_ban.html" class="red">đặt bàn tại đây</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>

                    <ul class="tabs">
                        <li class="tab-link active">
                            <h3>mô tả món ăn</h3>
                        </li>
                        <li class="tab-link">
                            <h3>chính sách</h3>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <p id="description">Phở cuốn là món ăn được các đầu bếp dành nhiều thời gian dày công chế biến.
                            Với bánh phở tạo ra từ hạt gạo ngâm suốt 12 tiếng liền, sau đó xay và tráng
                            cách thủy mang đến miếng bánh ướt mỏng, dai dai hoàn toàn tự nhiên. Thêm vào
                            đó là sự kết hợp hài hòa cùng nguyên liệu bò Úc thượng hạng tẩm ướp đậm vị và
                            các loại rau thơm nhiệt đới. Khi thưởng thức kèm nước sốt chấm được pha chế
                            đặc biệt mang đến trải nghiệm ẩm thực tuyệt hảo, đầy thú vị.
                        </p>
                        <h3>Thành phần:</h3>
                        <p id="ingredient">Nạc vai bò Úc, bánh ướt, húng lủi, húng quế, ngò gai, giá sống, cà chua, hành
                            phi, đậu phộng, nước mắm, đường cát Biên Hòa, giấm nuôi, tỏi lột, mè trắng, bột thịt gà,
                            tiêu đen</p>
                        <h3>Khẩu phần:</h3>
                        <p>1 người</p>
                        <h3>Năng lượng:</h3>
                        <p>Protein - 28.33, Carbs - 24.93, Fats - 8.97 (Total Kcal - 293.77)</p>
                    </div>

                    <div class="productRelate">
                        <div class="title-index">
                            <h2><a href="#">Món ăn cùng loại</a></h2>
                        </div>
                        <div class="swiper-wrapper">
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="./public/image/products/<?php echo $productList[$i]['image'] ?>.jpg"
                                            alt="">
                                    </a>
                                    <div class="product-info">
                                        <a href="#" class="product-name">
                                            <?php echo $productList[$i]['name'] ?>
                                        </a>
                                        <div class="price-box">
                                            <span class="price">
                                                <?php echo $productList[$i]['price'] ?>.000đ
                                            </span>
                                            <!-- <span class="compare-price">70.000đ</span> -->
                                        </div>
                                    </div>
                                    <div class="btn-card">
                                        <a href="detail.php?id=<?php echo $productList[$i]['id']; ?>" class="btn-more">Xem
                                            chi tiết</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <section class="section-prd-feature">
                        <div class="title-index">
                            <h2><a href="#">Món ăn đã xem</a></h2>
                        </div>
                        <div class="swiper-wrapper">
                            <?php for ($i = 5; $i < 9; $i++) { ?>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="./public/image/products/<?php echo $productList[$i]['image'] ?>.jpg"
                                            alt="">
                                    </a>
                                    <div class="product-info">
                                        <a href="#" class="product-name">
                                            <?php echo $productList[$i]['name'] ?>
                                        </a>
                                        <div class="price-box">
                                            <span class="price">
                                                <?php echo $productList[$i]['price'] ?>.000đ
                                            </span>
                                            <!-- <span class="compare-price">70.000đ</span> -->
                                        </div>
                                    </div>
                                    <div class="btn-card">
                                        <a href="detail.php?id=<?php echo $productList[$i]['id']; ?>" class="btn-more">Xem
                                            chi tiết</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </section>

                </div>

                <div class="col-lg-3">
                    <div class="content-top">
                        <div class="title">Có thể bạn đang tìm</div>
                        <div class="product">
                            <?php for ($i = 11; $i < 16; $i++) { ?>
                                <div class="product-list">
                                    <img src="./public/image/products/đồ uống/<?php echo $productList[$i]['image'] ?>.jpg"
                                        alt="">
                                    <div class="product-info">
                                        <div class="info">
                                            <a href="#" class="product-name">
                                                <?php echo $productList[$i]['name'] ?>
                                            </a>
                                        </div>
                                        <div class="product-box">
                                            <span class="price">
                                                <?php echo $productList[$i]['price'] ?>.000đ
                                            </span>
                                            <button class="btn-card">Đặt món</button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include_once './view/inc/footer.php' ?>

    <!-- button scroll to top design -->
    <button id="toTop"><i class="fa-solid fa-chevron-up"></i></button>

    <script src="./public/js/main.js"></script>
</body>

</html>