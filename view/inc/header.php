<header class="header" id="header">
        <div class="container">
            <div class="logo" id="logo"><a href="home.php"><img src="./public/image/logo/logo.png" alt=""></a></div>
            <nav class="navbar" id="navbar">
                <div class="container">
                    <ul>
                        <li class="nav-item"><a href="home.php">Trang chủ</a></li>
                        <li class="nav-item"><a href="#">Giới thiệu</a></li>
                        <li class="nav-item"><a href="category.php">Menu</a></li>
                        <li class="nav-item"><a href="#">Món ăn nổi bật</a></li>
                        <li class="nav-item"><a href="#">Tin tức</a></li>
                        <li class="nav-item"><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>

            <div class="btn-box">
                <div class="container">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <div class="header-content">
                                <p>tìm kiếm món ăn của bạn</p>
                                <form action="search.php" method="get" class="input">
                                    <input type="text" class="my-input" name="search" placeholder="Nhập tên món ăn...">
                                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </li>
                        <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                        <li class="user" style="z-index: 10;">
                            <a href="#">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <ul class="nav-second">
                                <a href="login.php"><li>Đăng nhập</li></a>
                                <a href="register.php"><li>Đăng ký</li></a>
                                <a href="#"> <li>Món ăn yêu thích</li></a>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i></a></li>
                    </ul>
                    <button class="btn-header">Đặt bàn</button>
                </div>
            </div>
        </div>
    </header>