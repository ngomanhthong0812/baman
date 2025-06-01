<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Goldsmith &#8211; Modern WooCommerce Theme</title>
    <link rel="shortcut icon" href="./public/img/logo/123.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./public/css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include './view/inc/_header.php' ?>
    <div class="my_body">
        <div class="my_banner">
            <div data-bs-interval="8000">
                <img src="./public/img/banner/accesories-full-1.jpg" class="d-block w-full" alt="...">
            </div>
        </div>

        <div class="icon_prioritize">
            <div class="icon_prioritize_inner">
                <img src="./public/img/icon_prioritize/1.png" alt="">
                <h5>Amazing Value Every Day</h5>
                <span>Items prices that fit your budget</span>
            </div>
            <div class="icon_prioritize_inner">
                <img src="./public/img/icon_prioritize/2.png" alt="">
                <h5>Successful Customer Service</h5>
                <span>We work with a focus on 100% customer satisfaction.</span>
            </div>
            <div class="icon_prioritize_inner">
                <img src="./public/img/icon_prioritize/3.png" alt="">
                <h5>All Payment Methods</h5>
                <span>Don't bother with payment details.</span>
            </div>
            <div class="icon_prioritize_inner flex-col items-center">
                <img src="./public/img/icon_prioritize/4.png" alt="">
                <h5>Completely free shipping</h5>
                <span>We'll handle the shipping.</span>
            </div>
        </div>

        <div class="product">
            <div class="banner_2 w-80 d-flex flex-col gap-2">
                <img src="./public/img/banner/banner1_product2.png" alt="" class="w-full">
                <img src="./public/img/banner/banner2_product2.png" alt="" class="w-full">
            </div>
            <div class="product_card">
                <!-- begin product -->
                <?php for ($i = 0; $i < min(8, count($productList)); $i++) { ?>
                    <a href="detail.php?product_id=<?php echo $productList[$i]['id']; ?>" class="my_card">
                        <div class="image">
                            <img src="<?php echo $productList[$i]['image']; ?>" alt="">
                            <div class="icon"> <i class='bx bx-heart'></i><i class='bx bxs-right-arrow'></i></div>
                            <div class="icon"><i class='bx bx-refresh'></i><i class='bx bxs-right-arrow'></i></div>
                            <div class="icon">
                                <i class='bx bx-fullscreen'></i><i class='bx bxs-right-arrow'></i>
                            </div>
                            <button>Read more</button>
                        </div>
                        <p>
                            <?php echo $productList[$i]['name']; ?>
                        </p>
                        <div class="price">
                            <div class="price">
                                <?php echo number_format($productList[$i]['price'], 0, ',', '.'); ?> vnđ
                            </div>
                        </div>
                    </a>
                <?php } ?>
                <!-- end product -->

            </div>
        </div>

        <div class="container_sale">
            <div class="sale">
                <div class="sale_1"><span>Super discount for your first purchase</span><span>FIRST250</span><span>Use
                        discount code in checkout page.</span></div>
                <div class="sale_2"><span>2nd shopping surprise campaign!</span><button>Check Products <i class='bx bx-skip-next'></i></button></div>
            </div>
        </div>

        <div class="product pb-10">
            <div class="banner_2 w-80 d-flex flex-col gap-2">
                <img src="./public/img/banner/banner1_product1.png" alt="" class="w-full">
                <img src="./public/img/banner/banner2_product1.png" alt="" class="w-full">
            </div>
            <div class="product_card">
                <!-- begin product -->
                <?php for ($i = 0; $i < min(8, count($productList)); $i++) { ?>
                    <a href="detail.php?product_id=<?php echo $productList[$i]['id']; ?>" class="my_card">
                        <div class="image">
                            <img src="<?php echo $productList[$i]['image']; ?>" alt="">
                            <div class="icon"> <i class='bx bx-heart'></i><i class='bx bxs-right-arrow'></i></div>
                            <div class="icon"><i class='bx bx-refresh'></i><i class='bx bxs-right-arrow'></i></div>
                            <div class="icon">
                                <i class='bx bx-fullscreen'></i><i class='bx bxs-right-arrow'></i>
                            </div>
                            <button>Read more</button>
                        </div>
                        <p>
                            <?php echo $productList[$i]['name']; ?>
                        </p>
                        <div class="price">
                            <div class="price">
                                <?php echo number_format($productList[$i]['price'], 0, ',', '.'); ?> vnđ
                            </div>
                        </div>
                    </a>
                <?php } ?>
                <!-- end product -->

            </div>
        </div>

    </div>


    <div class="banner_4">
        <img src="./public/img/product/banner_4.png" alt="">
        <div>
            <div class="featured_Deals-child--2-banner_3-1">
                <span class="status">NEW SEASON</span>
                <h5>Back to the past: <span>Bracelets</span></h5>
                <div class="content">You can hide so much behind theatrics, and I don't need to do that any more. My
                    relationships with producers or photographers - these are relationships that took years.</div>
                <button>View all leather products<i class='bx bxs-right-arrow'></i></button>

            </div>
        </div>
    </div>
    <div class="container_instagram">
        <div class="instagram">
            <div class="title">
                <div class="name_shop">#BaMan</div>
                <div>Tag <span>@bamanshop</span> in your Instagram posts for a chance to be featured here.</div>
                <div>Find more inspiration on our <span>Instagram account.</span></div>
            </div>
            <div>
                <div><img src="./public/img/instagram/1.png" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/2.png" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/3.png" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/4.png" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/5.png" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/6.png" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/7.png" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
                <div><img src="./public/img/instagram/8.png" alt=""><img src="./public/img/product/icon.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include './view/inc/_footer.php' ?>
    <!-- footer -->

    <script src="./public/js/main.js"></script>
    <script src="./public/js/product_detail.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>