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
    <!-- thêm thư viện noUiSlider -->
    <link href="https://cdn.jsdelivr.net/npm/nouislider/distribute/nouislider.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/nouislider"></script>
</head>

<body>
    <?php include './view/inc/_header.php' ?>
    <div class="relative w-[100%] h-[128px] bg-[#f5f5f5] container_categories">
        <div class="w-[100%] h-[100%] max-w-[1540px] px-[1rem] flex flex-col justify-center absolute top-0 left-[50%] translate-x-[-50%]">
            <ul class="flex gap-[5px] text-[12px] text-gray-300 leading-8">
                <li class="text-black">TRANG CHỦ</li>
                &#8226;
                <li class="text-black">CỬA HÀNG</li>
            </ul>
            <ul class="text-[26px] font-[510]">
                <li>Shop</li>
            </ul>
        </div>
    </div>

    <div class="my_body py-[3rem]">
        <div class="max-w-[1540px] m-auto flex">
            <div class="w-[25%] pr-[2.3rem]">
                <div class="mt-[2rem]">
                    <span class="flex justify-between items-center text-[15px] font-[500]">
                        <p>Lọc theo giá</p><button class="w-[20px] h-[20px] rounded-full bg-[#f5f5f5] text-[16px] flex items-center justify-center font-bold">-</button>
                    </span>
                    <!-- <input type="range" class="w-[100%] mt-[1rem]"> -->
                    <div id="slider" class="w-[100%] mt-[1rem]"></div>
                    <form action="category.php" method="get" class="flex justify-between items-center text-[12px] mt-[1rem] text-[#7d7d7d] font-[420]">
                        <button class="bg-black text-white py-[0.4rem] px-3">FILTER</button>
                        <input type="hidden" name="minPrice" id="minPriceData" value="">
                        <input type="hidden" name="maxPrice" id="maxPriceData" value="">
                        <span class="flex items-center justify-center">PRICE:<div id="minPrice"></div> - <div id="maxPrice"></div></span>
                    </form>

                </div>
                <div class="mt-[2rem]">
                    <span class="flex justify-between items-center text-[15px] font-[500]">
                        <p>Filter By</p><button class="w-[20px] h-[20px] rounded-full bg-[#f5f5f5] text-[16px] flex items-center justify-center font-bold">-</button>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[1rem]">
                        <button type="black" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-black border"></div>Đen
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center"></div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button type="blue" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-[blue] border"></div>Xanh biển
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center"></div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button type="brown" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-[brown] border"></div>Nâu
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center"></div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button type="green" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-[green] border"></div>Xanh lá
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center"></div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button type="white" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-[#ffffff] border"></div>Trắng
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center"></div>
                    </span>
                    <span class="flex justify-between items-center text-[12px] font-[400] mt-[0.5rem]">
                        <button type="yellow" class="btnType text-[#7d7d7d] flex items-center gap-[10px] cursor-pointer">
                            <div class="w-[11px] h-[11px] rounded-full bg-[yellow] border"></div>Vàng
                        </button>
                        <div class="w-[20px] h-[20px] rounded-full text-[11px] flex items-center justify-center"></div>
                    </span>
                </div>
            </div>
            <div class="w-[75%] pl-[1rem]">
                <!-- <nav class="py-[2.5rem]">
                    <ul class="flex text-[12px] font-[500] gap-[15px]">
                        <li class="flex items-center text-[14px] text-[#7d7d7d]">Fast Filters:</li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            <img src="./public/img/icon_categories/dollar.png" alt="" class="w-[15px]">FEATURED
                        </li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            <img src="./public/img/icon_categories/promotional.png" alt="" class="w-[15px]">BEST
                            SELLERS
                        </li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            <img src="./public/img/icon_categories/rating.png" alt="" class="w-[15px]">TOP RATED
                        </li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            <img src="./public/img/icon_categories/discount.png" alt="" class="w-[15px]">ON SALE
                        </li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            <img src="./public/img/icon_categories/box.png" alt="" class="w-[15px]">IN STOCK
                        </li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            SELECT COLOR</li>
                        <li class="flex items-center gap-[7px] border px-[1.2rem] rounded-[20px] py-[0.3rem] hover:bg-black hover:text-white duration-200 ease-in-out cursor-pointer">
                            SELECT PATTERN</li>
                    </ul>
                </nav> -->
                <div class="container_title_category text-[15px] flex items-center justify-between text-[#7d7d7d]">
                    <span class="title flex items-center">Showing <?php echo isset($_GET['minPrice']) && isset($_GET['maxPrice']) ? 'all ' : 'all ' . count($productList) . '-19' ?> results <?php echo isset($_GET['minPrice']) && isset($_GET['maxPrice']) ? '&nbsp;&nbsp; 
                    <form action="category.php" method="get">
                    <input type="hidden" name="removePrice">
                    <button class="bx bxs-x-circle cursor-pointer hover:font-[600]"></button> &nbsp;
                    </form>
                    ' . $_GET['minPrice'] . " - " . $_GET['maxPrice'] : "" ?></span>
                    <div class="flex gap-[20px]">
                        <div class="flex gap-[10px]">
                            <li class="val-1 active list-none cursor-pointer" onclick="filter(1)">
                                <svg class="svgList goldsmith-svg-icon" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor">
                                    <path d="M25,35.83H0V64.17H25Zm0,35.84H0V100H25ZM25,0H0V28.33H25Zm5,71.67V100h70V71.67ZM30,0V28.33h70V0Zm0,35.83V64.17h70V35.83Z">
                                    </path>
                                </svg>
                            </li>
                            <li class="val-2 list-none cursor-pointer" onclick="filter(2)">
                                <svg class="svgTwoColumn goldsmith-svg-icon" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor">
                                    <path d="M100,100H54V0h46ZM46,0H0V100H46Z" transform="translate(0.5 0.65)"></path>
                                </svg>
                            </li>
                            <li class="val-3 d-none d-sm-flex list-none cursor-pointer" onclick="filter(3)">
                                <svg class="svgThreeColumn goldsmith-svg-icon" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101.15" fill="currentColor">
                                    <path d="M100,100H70V0h30ZM30,0H0V100H30ZM65-.15H35v100H65Z" transform="translate(0.5 0.65)"></path>
                                </svg>
                            </li>
                            <li class="val-4 d-none d-lg-flex cursor-pointer" onclick="filter(4)">
                                <svg class="svgFourColumn goldsmith-svg-icon" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor">
                                    <path d="M21.5,0H0V100H21.5ZM100,0H78.5V100H100ZM48,0H26.5V100H48ZM74,0H52.5V100H74Z">
                                    </path>
                                </svg>
                            </li>
                            <form id="sortByForm" action="category.php" method="get">
                                <select id="sortBy" name="orderBy">
                                    <option class="text-[12px]" <?php if (isset($_GET['orderBy']) && $_GET['orderBy'] == 'latest' || !isset($_GET['orderBy'])) {
                                                                    echo 'selected';
                                                                } ?> value="latest">Sort by latest</option>
                                    <option class="text-[12px]" <?php if (isset($_GET['orderBy']) && $_GET['orderBy'] == 'ascending') {
                                                                    echo 'selected';
                                                                } ?> value="ascending">Price sort: ascending</option>
                                    <option class="text-[12px]" <?php if (isset($_GET['orderBy']) && $_GET['orderBy'] == 'descending') {
                                                                    echo 'selected';
                                                                } ?> value="descending">Price sort: descending</option>
                                </select>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- start lọc 1 -->
                <div class="relative container_filter-1">
                    <div class="product_card product_card1 grid-cols-2 w-[100%] filter-1 px-0 py-[2rem]">
                        <?php foreach ($productList as $product) { ?>
                            <?php if (in_array(intval($product['price']), $productPriceFilter)) { ?>
                                <a href="detail.php?product_id=<?php echo $product['id']; ?>" type="<?php echo $product['category_name'] ?>" class="my_card w-[100%] flex gap-[20px] border p-[1.2rem] rounded-[10px] shadow-sm">
                                    <div class="image w-[300px] h-[180px] border rounded-[5px]">
                                        <img src="<?php echo $product['image']; ?>" alt="">
                                        <div class=" icon"> <i class='bx bx-heart'></i><i class='bx bxs-right-arrow'></i>
                                        </div>
                                        <div class="icon"><i class='bx bx-refresh'></i><i class='bx bxs-right-arrow'></i></div>
                                        <div class="icon" onclick="openZoomCard('<?php echo $product['id']; ?>','<?php echo $product['image']; ?>', '<?php echo $product['name']; ?>', '<?php echo $product['price']; ?>','<?php echo $product['description']; ?>', event)">
                                            <i class='bx bx-fullscreen'></i><i class='bx bxs-right-arrow'></i>
                                        </div>
                                    </div>
                                    <div class="w-[300px]">
                                        <p>
                                            <?php echo $product['name']; ?>
                                        </p>
                                        <div class="price">
                                            <?php echo number_format($product['price'], 0, ',', '.'); ?> vnđ
                                        </div>
                                        <div class="content text-[12px] mt-[10px] truncate overflow-hidden ">
                                            <?php echo $product['description']; ?>
                                        </div>
                                        <div class="view w-[100%] h-[8px] relative bg-[#e6e6e6] rounded-[5px] mt-[10px]">
                                            <div class="w-[<?php echo $product['quantity']; ?>%] h-[100%] bg-[red] rounded-l-[5px] absolute top-0 left-0">
                                            </div>
                                        </div>
                                        <div class="quantity">
                                            <div class="text-[13px] text-[#7d7d7d] mt-[10px]">Available: <b class="text-black">
                                                    <?php echo $product['quantity']; ?>
                                                </b>
                                            </div>
                                        </div>
                                        <button class="bg-black text-white text-[13px] px-[2.5rem] py-[0.4rem] mt-[10px]">Xem thêm</button>
                                    </div>
                                </a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <!-- end lọc 1 -->

                    <!-- start lọc 2,3,4 -->
                    <div class="product_card product_card2 grid-cols-2 w-[100%] filter-2 hidden px-0 py-[2rem]">
                        <?php foreach ($productList as $product) { ?>
                            <?php if (in_array(intval($product['price']), $productPriceFilter)) { ?>
                                <a href="detail.php?product_id=<?php echo $product['id']; ?>" type="<?php echo $product['category_name'] ?>" class="my_card">
                                    <div class="image">
                                        <img src="<?php echo $product['image']; ?>" alt="">
                                        <div class="icon"> <i class='bx bx-heart'></i><i class='bx bxs-right-arrow'></i></div>
                                        <div class="icon"><i class='bx bx-refresh'></i><i class='bx bxs-right-arrow'></i></div>
                                        <div class="icon" onclick="openZoomCard('<?php echo $product['id']; ?>','<?php echo $product['image']; ?>', '<?php echo $product['name']; ?>', '<?php echo $product['price']; ?>','<?php echo $product['description']; ?>', event)">
                                            <i class='bx bx-fullscreen'></i><i class='bx bxs-right-arrow'></i>
                                        </div>
                                        <button>Xem thêm</button>
                                    </div>
                                    <p>
                                        <?php echo $product['name']; ?>
                                    </p>
                                    <div class="price"> <?php echo number_format($product['price'], 0, ',', '.'); ?> vnđ
                                    </div>
                                </a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <!-- end lọc 2,3,4 -->
                <!--  lấy số trang -->




                <?php $pageNumber = intval((count($productPriceFilter) / 8) + 1); ?>
                <div class="page flex m-[auto] w-[fit-content] p-[0.3rem] gap-[5px] rounded-[3px] bg-black items-center justify-center text-[16px]">
                    <form method="get" action="category.php">
                        <?php if (isset($_GET['minPrice']) && isset($_GET['maxPrice'])) { ?>
                            <input type="hidden" name="minPrice" id="minPriceData" value="<?php echo $_GET['minPrice'] ?>">
                            <input type="hidden" name="maxPrice" id="maxPriceData" value="<?php echo $_GET['maxPrice'] ?>">
                        <?php } ?>
                        <input type="hidden" name="page" value="1">
                        <input type="submit" class="w-[35px] h-[35px] rounded-[3px] flex items-center justify-center cursor-pointer text-[white] hover:bg-white hover:text-black duration-300 ease-in-out" value="&lt;&lt;">
                    </form>
                    <form method="get" action="category.php">
                        <?php if (isset($_GET['minPrice']) && isset($_GET['maxPrice'])) { ?>
                            <input type="hidden" name="minPrice" id="minPriceData" value="<?php echo $_GET['minPrice'] ?>">
                            <input type="hidden" name="maxPrice" id="maxPriceData" value="<?php echo $_GET['maxPrice'] ?>">
                        <?php } ?>
                        <input type="hidden" name="page" value="<?php echo $page > 1 ? $page - 1 : 1 ?>">
                        <input type="submit" class="w-[35px] h-[35px] rounded-[3px] flex items-center justify-center cursor-pointer text-[white] hover:bg-white hover:text-black duration-300 ease-in-out" value="&lt;">
                    </form>
                    <form method="get" action="category.php" class="flex gap-[5px]">
                        <?php if (isset($_GET['minPrice']) && isset($_GET['maxPrice'])) { ?>
                            <input type="hidden" name="minPrice" id="minPriceData" value="<?php echo $_GET['minPrice'] ?>">
                            <input type="hidden" name="maxPrice" id="maxPriceData" value="<?php echo $_GET['maxPrice'] ?>">
                        <?php } ?>
                        <?php for ($i = 1; $i <= $pageNumber; $i++) { ?>
                            <input type="submit" class="w-[35px] h-[35px] rounded-[3px] flex items-center justify-center text-center cursor-pointer  duration-300 ease-in-out <?php echo $page == $i ? " bg-white text-black" : " bg-[black] text-[white] hover:bg-white hover:text-black"; ?>" name="page" value="<?php echo $i ?>">
                        <?php } ?>
                    </form>
                    <form method="get" action="category.php">
                        <?php if (isset($_GET['minPrice']) && isset($_GET['maxPrice'])) { ?>
                            <input type="hidden" name="minPrice" id="minPriceData" value="<?php echo $_GET['minPrice'] ?>">
                            <input type="hidden" name="maxPrice" id="maxPriceData" value="<?php echo $_GET['maxPrice'] ?>">
                        <?php } ?>
                        <input type="hidden" name="page" value="<?php echo $page < $pageNumber ? $page + 1 : $pageNumber ?>">
                        <input type="submit" class="w-[35px] h-[35px] rounded-[3px] flex items-center justify-center cursor-pointer text-[white] hover:bg-white hover:text-black duration-300 ease-in-out" value="&gt;">
                    </form>
                    <form method="get" action="category.php">
                        <?php if (isset($_GET['minPrice']) && isset($_GET['maxPrice'])) { ?>
                            <input type="hidden" name="minPrice" id="minPriceData" value="<?php echo $_GET['minPrice'] ?>">
                            <input type="hidden" name="maxPrice" id="maxPriceData" value="<?php echo $_GET['maxPrice'] ?>">
                        <?php } ?>
                        <input type="hidden" name="page" value="<?php echo $pageNumber ?>">
                        <input type="submit" class="w-[35px] h-[35px] rounded-[3px] flex items-center justify-center cursor-pointer text-[white] hover:bg-white hover:text-black duration-300 ease-in-out" value="&gt;&gt;">
                    </form>
                </div>


            </div>
        </div>
    </div>


    <?php include './view/inc/_footer.php' ?>

    <script src="./public/js/product_detail.js"></script>
    <script>
        var menu = document.querySelector(".container_menu");
        var myBody = document.querySelector(".container_categories");

        window.addEventListener("scroll", function() {
            // Kiểm tra vị trí cuộn
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;

            // Thêm hoặc xoá class tùy thuộc vào vị trí cuộn
            if (scrollPosition > 0) {
                menu.style.transform = "translateY(-48px)";
                menu.style.position = "fixed";
                myBody.style.marginTop = "4.8rem";
            } else {
                menu.style.transform = "translateY(0px)";
            }
        });
    </script>
</body>

</html>