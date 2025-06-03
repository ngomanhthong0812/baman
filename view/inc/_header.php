<form class="my_search" method="get" action="search.php">
    <div class="close_search"><i class='bx bx-x'></i></div>
    <input type="text" id="name_search" name="name" placeholder="Tìm sản phẩm..." style="border:none">
    <button class="btn_search"></button>
</form>
<div class="menu_left menu_top">
    <div class="menu_left-navbar">
        <div class="energy">
            <div class="close_top" style="background-color: rgb(241, 241, 241);"><i class='bx bx-x'></i></div>
            <div class="shopping_top" style="margin-left: 17rem;"><i class='bx bx-shopping-bag'></i> <span>
                    <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : '0' ?>
                </span></div>
            <div class="heart_top"><i class='bx bx-heart'></i><span>0</span></div>
            <div class="refresh_top"><i class='bx bx-refresh'></i><span>0</span></div>
        </div>
        <div class="menu_top-ship-free z-[10] bg-white px-[1.5rem] py-0">
            <div class="menu_top-ship-free--title">
                Sản phẩm có giới hạn, hãy thanh toán trong <span style="color: #9c9c9c;">00p : 00s</span>
            </div>
            <div class="menu_top-ship-free--content">
                <span>Sản phẩm có giới hạn, hãy thanh toán trong <span style="color: #9c9c9c;">00p : 00s</span></span>
                <div class="icon">
                    <img src="./public/img/ship/7.png" alt="">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="menu_top-heart my_heart add_1 z-[10] bg-white">
            <!-- <div class="card_heart">
                <img src="./public/img/product/2.webp" alt="">
                <div class="card_heart-name_product">
                    <span>Beaded double necklace</span>
                    <div class="price" style="color: #9c9c9c;">$240.00 / <span style="color: salmon;">In
                            stock</span></div>
                    <span>Add to cart</span>
                </div>
                <i class='bx bx-trash'></i>
            </div> -->
        </div>

        <div class="menu_top-cart add_1 my_shopping  px-[1.5rem] py-0 w-[100%] truncate">
            <div class="container_top-cart w-[100%]">
                <?php if (isset($_SESSION['cart'])) { ?>
                    <?php foreach ($_SESSION['cart'] as $orderItems) { ?>
                        <div class="my_cart flex justify-between py-[0.5rem] items-center">
                            <div class="flex gap-[10px]">
                                <img src="<?php echo $orderItems["productImage"] ?>" alt=""
                                    class="w-[80px]">
                                <div class="card_heart-name_product flex flex-col justify-center">
                                    <span>
                                        <?php echo $orderItems['productName']; ?>
                                    </span>
                                    <div class="price" style="color: #9c9c9c;">
                                        <?php echo number_format($orderItems['productPrice'], 0, ',', '.'); ?> vnđ /
                                        <span style="color: salmon;">Instock</span>
                                    </div>
                                    <span class="text-[12px] font-bold">X
                                        <?php echo $orderItems['quantity']; ?>
                                    </span>
                                </div>
                            </div>
                            <form action="cart.php" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="idRemove" value="<?php echo $orderItems["productId"] ?>">
                                <button><i class='remove_cart bx bx-trash cursor-pointer text-black'
                                        style="font-size: 15px;"></i></button>
                            </form>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="moreCart flex items-center justify-center text-[12px] font-black"></div>
            <div class="button mt-[5px]">
                <button><a href="cart.php">Xem giỏ hàng</a></button>
                <button><a href="category.php">Bắt đầu mua sắm</a></button>
            </div>
        </div>

    </div>

</div>


<div class="container_navbar">
    <div class="navbar">
        <div class="icon">
            <i class='bx bxl-facebook-circle' style='color:#ffffff'></i>
            <i class='bx bxl-twitter' style='color:#ffffff'></i>
            <i class='bx bxl-youtube' style='color:#ffffff'></i>
        </div>
        <div class="title">MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG TRÊN $75</div>
        <div class="content">
            <!-- <a href="category.php">GIỎ HÀNG</a>
            <a href="category.php">TÌM KIẾM</a>
            <a href="category.php">HỖ TRỢ</a> -->
        </div>
    </div>
</div>

<div class="reponsive_menu">
    <div class="oppenMenu"><i class='bx bx-menu' style="padding-left: 1rem;"></i></div>
    <div class="name_shop" style="position: absolute; left: 50%; transform: translateX(-50%);"><a
            href="index.php" class="flex items-center"><img src="./public/img/logo/123.png" class="w-9" />AMAN</a></div>
    <div class=""><i class='bx bx-shopping-bag'></i></div>
</div>
<div class="container_menu">
    <div class="menu" style="position: relative;">
        <div class="menu_1">
            <li><a href="index.php">TRANG CHỦ<i class='bx bx-chevron-down'></i></a>
            </li>
            <li><a href="category.php">CỬA HÀNG<i class='bx bx-chevron-down'></i></a>
            </li>
        </div>
        <div class="name_shop" style="position: absolute; left: 50%; transform: translateX(-50%);"><a
                href="index.php" class="flex items-center"><img src="./public/img/logo/123.png" class="w-9" />AMAN</a></div>
        <div class="energy pr-5">
            <div class="search"><i class='bx bx-search' style="padding-right: 1rem;"></i></div>
            <div class="shopping"><i class='bx bx-shopping-bag'></i>
                <span>
                    <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : '0' ?>
                </span>
            </div>
            <div class="heart"><i class='bx bx-heart'></i><span>0</span></div>
            <?php if (isset($_SESSION['email']) && $_SESSION['email'] != "" && $_SESSION['role'] == 'user') { ?>
                <div class="user is_login relative">
                    <i class='bx bx-user'></i>
                    <div class="account_user hidden">
                        <ul
                            class="absolute z-10 w-[200px] px-[0.8rem] py-[0.3rem] text-[13px] flex flex-col justify-center bg-white top-[7px] left-[-150px]">
                            <li class="p-0 mt-[5px] flex justify-center">
                                <?php echo $_SESSION['email'] ?>
                            </li>
                            <a href="my-order.php">
                                <li class="p-0 mt-[5px] flex items-center gap-[5px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2M5 19V5h14v14z"></path>
                                        <path d="M7 7h10v2H7zM7 11h10v2H7zM7 15h10v2H7z"></path>
                                    </svg> Đơn hàng
                                </li>
                            </a>
                            <a href="logout.php">
                                <li class="p-0 mt-[5px] flex items-center gap-[5px]"><i
                                        class='bx bx-log-out bx-rotate-180'></i>Đăng xuất</li>
                            </a>
                        </ul>
                    </div>
                </div>
            <?php } else { ?>
                <?php if (isset($_SESSION['email']) && $_SESSION['email'] != "" && $_SESSION['role'] == 'admin') { ?>
                    <div class="user is_login relative">
                        <i class='bx bx-user'></i>
                        <div class="account_user hidden">
                            <ul
                                class="absolute z-10 w-[200px] px-[0.8rem] py-[0.3rem] text-[13px] flex flex-col justify-center bg-white top-[7px] left-[-150px]">
                                <li class="p-0 mt-[5px] flex justify-center">
                                    <?php echo $_SESSION['email'] ?>
                                </li>
                                <a href="admin/statistics/index.php">
                                    <li class="p-0 mt-[5px] flex items-center gap-[5px]"><i class='bx bx-lock-alt'></i>Admin
                                    </li>
                                </a>
                                <a href="my-order.php">
                                    <li class="p-0 mt-[5px] flex items-center gap-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2M5 19V5h14v14z"></path>
                                            <path d="M7 7h10v2H7zM7 11h10v2H7zM7 15h10v2H7z"></path>
                                        </svg> Đơn hàng
                                    </li>
                                </a>
                                <a href="logout.php">
                                    <li class="p-0 mt-[5px] flex items-center gap-[5px]"><i
                                            class='bx bx-log-out bx-rotate-180'></i>Đăng xuất</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="user">
                        <a href="login.php"><i class='bx bx-user'></i></a>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</div>