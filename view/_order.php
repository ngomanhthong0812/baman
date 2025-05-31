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
        <div class="px-[1rem] m-auto flex flex-col justify-center bg-[#f5f5f5]">
            <ul class="flex gap-[5px] text-[12px] text-gray-300 leading-8 w-[100px] m-auto">
                <li class="text-black"><a href="index.php">HOME</a></li>
                &#8226;
                <li class="text-black"><a href="#">CHECKOUT</a></li>
            </ul>
        </div>
    </div>
    <div class="my_body">
        <div class="max-w-[1540px] m-auto pt-[1rem] text-[15px] pb-[5rem]">
            <div class="w-[330px] border p-[0.5rem] flex items-center justify-center bg-[#f5f5f5] text-[14px]">Thank you. Your
                order has been recevied.</div>
            <div class="w-[800px] border-sloid border-2 py-2 px-1 flex items-center mt-[2rem]">
                <div class="flex items-center justify-center">
                    <span class="border-dashed border-r p-2">Order number: <p id="code" data-value='<?php echo $_SESSION['code']; ?>'><?php echo $_SESSION['code']; ?></p></span>
                    <span class="border-dashed border-r p-2">Date: <p class="flex-nowrap"><?php echo $_SESSION['date'] ?></p></span>
                    <span class="border-dashed border-r p-2">Total: <p id="total" data-value='<?php echo $_SESSION['total']; ?>'> <?php echo number_format($_SESSION['total'], 0, ',', '.'); ?> vnđ</p></span>
                    <span class="px-3 p-2">Payment method: <p class="flex-nowrap"><?php echo $_SESSION['payment_method'] === 'cod' ? 'Cash on Delivery' : 'Online' ?></p></span>
                </div>
            </div>

            <?php if (isset($_SESSION['payment_method']) && $_SESSION['payment_method'] === 'online'): ?>
                <div class="p-4 bg-white rounded shadow-md max-w-md mx-auto mt-10">
                    <div class="mt-4">
                        <div class="text-lg font-semibold mb-2">Payment QR Code:</div>
                        <img
                            id="qrCode"
                            src=""
                            alt="QR Code"
                            class="rounded-md mx-auto p-2" />
                    </div>

                    <div class="mt-8">
                        <div class="text-2xl font-semibold mb-4">Our bank details</div>
                        <div class="font-semibold mb-2">Nine</div>

                        <div class="space-y-2 text-gray-700 text-sm">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl text-gray-400">&#8226;</span>
                                <span class="font-medium">Bank:</span>
                                <span id="bankName" class="ml-1">Mb Bank</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-xl text-gray-400">&#8226;</span>
                                <span class="font-medium">Account number:</span>
                                <span id="accountNo" class="ml-1">1025693979</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-xl text-gray-400">&#8226;</span>
                                <span class="font-medium">Sort code:</span>
                                <span class="ml-1"><?php echo $_SESSION['code']; ?></span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-xl text-gray-400">&#8226;</span>
                                <span class="font-medium">Price:</span>
                                <span class="ml-1"><?php echo number_format($_SESSION['total'], 0, ',', '.'); ?> vnđ</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div></div>


    <?php include './view/inc/_footer.php' ?>

    <script src="./public/js/product_detail.js"></script>
    <script src="./public/js/payment.js"></script>
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