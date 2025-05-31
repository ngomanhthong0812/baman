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
    <div class="w-[100%] my_login">
        <div class="max-w-[1540px] px-[1rem] m-auto flex flex-col justify-center bg-[#f5f5f5]">
            <ul class="flex gap-[5px] text-[12px] text-gray-300 leading-8 w-[100px] m-auto">
                <li class="text-black"><a href="./public/home.php">HOME</a></li>
                &#8226;
                <li class="text-black text-nowrap"><a href="./public/login.php">My Orders</a></li>
            </ul>
        </div>
    </div>


    <div class="my_body">
        <div class="max-w-7xl mx-auto bg-white shadow-md rounded-md p-6 my-8">
            <!-- Header row -->
            <div class="hidden md:flex text-gray-600 font-semibold border-b border-gray-300 pb-2 mb-4">
                <div class="flex-1 md:flex-[2]">Product</div>
                <div class="flex-1">Order Number</div>
                <div class="flex-1">Date</div>
                <div class="flex-1">Total Amount</div>
                <div class="flex-1">Payment Status</div>
            </div>

            <!-- Order items -->
            <div class="space-y-4">
                <?php foreach ($orders as $order): ?>
                    <div class="flex flex-col md:flex-row items-center md:items-center border border-gray-200 rounded-md p-4">
                        <!-- Product info: image + name -->
                        <div>
                            <?php foreach ($order['items'] as $item): ?>
                                <div class="flex flex-1 md:flex-[2] items-center mb-2 md:mb-0">
                                    <img src="<?php echo htmlspecialchars($item['product_image']); ?>" alt="<?php echo htmlspecialchars($item['product_name']); ?>" class="w-16 h-16 object-cover rounded mr-4" />
                                    <div class="text-gray-800 font-medium"><?php echo htmlspecialchars($item['product_name']); ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>


                        <div class="flex-1 text-gray-800 font-medium mb-1 md:mb-0">#<?php echo htmlspecialchars($order['code']); ?></div>
                        <div class="flex-1 text-gray-700 mb-1 md:mb-0"><?php echo htmlspecialchars($order['date']); ?></div>
                        <div class="flex-1 text-green-600 font-semibold mb-1 md:mb-0">
                            $<?php echo number_format($order['total_amount'], 2); ?>
                        </div>

                        <div class="flex-1 <?php echo (strtolower($order['payment_status']) === 'paid') ? 'text-blue-600' : 'text-yellow-600'; ?> font-semibold mb-1 md:mb-0">
                            <?php echo htmlspecialchars($order['payment_status']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <?php include './view/inc/_footer.php' ?>

    <script src="./public/js/product_detail.js"></script>
    <script>
        var menu = document.querySelector(".container_menu");
        var myBody = document.querySelector(".my_login");

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