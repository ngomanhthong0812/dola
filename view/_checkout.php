<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/check_out.css">
    <link rel="shortcut icon" href="./public/image/logo/favicon.webp" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Check out</title>
</head>
<body>
    <div id="check_out__container" class="check_out__container">
        <form id="form__checkout" action="checkout.php" method="post">
            <div class="main">
                <header class="main__header">
                    <h1 class="shop__name"><a href="home.php">Dola Restaurant</a></h1>
                </header>

                <article class="animate">
                    <div class="col col--two">
                        <section class="section">
                            <div class="form__header">
                                <h2 class="title">Thông tin nhận hàng</h2>
                                <a href="login.php">
                                    <i class='bx bx-user-circle'></i>
                                    Đăng nhập
                                </a>
                            </div>
    
                            <div class="form__input">
                                <input type="text" name="email" placeholder="Email">
                                <input type="text" name="name" placeholder="Họ và tên">
                                <input type="text" name="phone" placeholder="Số điện thoại">
                                <input type="text" name="address" placeholder="Địa chỉ">
                                <input type="text" name="email" placeholder="Tỉnh thành">
                                <input type="text" name="email" placeholder="Quận huyện">
                                <input type="text" name="email" placeholder="Phường xã">
                            </div>
    
                        </section>
    
                        <div class="note">
                            <textarea name="" id="" cols="30" rows="5" placeholder="Ghi chú"></textarea>
                        </div>
                    </div>
                    
                    <div class="col col--two">
                        <div class="form__header">
                            <h2 class="title">Vận chuyển</h2>
                        </div>
    
                        <div class="content-box__row">
                            <div class="radio__input">
                                <input type="radio">
                            </div>
                            <span class="radio__label__primary">
                                <span>Giao hàng tận nơi</span>
                            </span>
                            <span class="radio__label__accessory">
                                <span>40.000₫</span>
                            </span>
                        </div>
    
                        <section class="section">
                            <h2 class="section__title">Thanh toán</h2>
    
                            <div class="content-box__row">
                                <div class="radio__input">
                                    <input type="radio">
                                </div>
                                <span class="radio__label__primary">
                                    <span>Thanh toán khi giao hàng (COD)</span>
                                </span>
                                <span class="radio__label__accessory">
                                    <i class='bx bx-money payment-icon'></i>
                                </span>
                            </div>
    
                            <div class="content-box__row__desc">
                                <p>Bạn chỉ phải thanh toán khi nhận được hàng</p>
                            </div>
                        </section>
                    </div>
                </article>
            </div>

            <div class="sidebar">
                <div class="sidebar__header">
                    <h2 class="sidebar__title">Đơn hàng</h2>
                </div>
                <div class="sidebar__content">
                    <div class="product">
                        <ul class="list__item">
                            <?php if (!empty($_SESSION['cart'])) { ?>
                                <?php foreach ($_SESSION['cart'] as $item) { ?>
                                    <?php if (!empty($_SESSION['cart'])) { ?>
                                        <li class="item">
                                            <div class="image__product">
                                                <img src="./public/image/products/<?php echo $item['productImage']; ?>.jpg" alt="product">
                                                <span class="quantity"><?php echo $item['quantity'] ?></span>
                                            </div>
                                            <span class="name__product"><?php echo $item['productName'] ?></span>
                                            <span class="price__product"><?php echo $item['productPrice'] . ".000"; ?>đ</span>
                                        </li>
                                    <?php } ?>
                                <?php } ?> 
                            <?php } ?>                    
                        </ul>
                    </div>

                    <div class="discount">
                        <input type="text" class="input__code" placeholder="Nhập mã giảm giá">
                        <button class="btn__code">Áp dụng</button>
                    </div>

                    <div class="sub__total">
                        <div class="provisional">
                            <span class="name">Tạm tính</span>
                            <?php if (!empty($_SESSION['cart'])) { ?>
                                <span class="price"><?php echo $item['productPrice'] . ".000";?>đ</span>
                            <?php } ?>
                        </div>

                        <div class="transport__fee">
                            <span class="name">Phí vận chuyển</span>
                            <span class="price">Free</span>
                        </div>
                    </div>

                    <div class="total">
                        <span class="name">Tổng cộng</span>
                        <?php if (!empty($_SESSION['cart'])) { ?>
                            <span class="price"><?php echo $item['productPrice'] . ".000";?>đ</span>
                        <?php } ?>
                    </div>

                    <div class="action">
                        <span class="previous-link">
                            <i class='bx bx-chevron-left'></i>
                            <span><a href="cart.php">Quay về giỏ hàng</a></span>
                        </span>
                        <button class="btn__order">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="./public/js/main.js"></script>
</body>
</html>