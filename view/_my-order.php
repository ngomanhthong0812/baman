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
                <li class="text-black"><a href="./public/home.php">TRANG CHỦ</a></li>
                &#8226;
                <li class="text-black text-nowrap"><a href="./public/login.php">Đơn hàng của tôi</a></li>
            </ul>
        </div>
    </div>


    <div class="my_body">
        <div class="max-w-7xl mx-auto bg-white shadow-md rounded-md p-6 my-8 overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="text-gray-600 font-semibold border-b border-gray-300">
                    <tr>
                        <th class="py-2 px-4">Order Number</th>
                        <th class="py-2 px-4">Ngày</th>
                        <th class="py-2 px-4">Sản phẩm</th>
                        <th class="py-2 px-4 text-center">Số lượng</th>
                        <th class="py-2 px-4 text-right">Tổng tiền</th>
                        <th class="py-2 px-4 text-center">Trạng thái thanh toán</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php foreach ($orders as $order): ?>
                        <?php foreach ($order['items'] as $index => $item): ?>
                            <tr class="border-b border-gray-200">
                                <?php if ($index === 0): ?>
                                    <!-- Hiển thị thông tin đơn hàng chỉ 1 lần -->
                                    <td class="py-3 px-4 align-top" rowspan="<?php echo count($order['items']); ?>">
                                        <?php echo htmlspecialchars($order['code']); ?>
                                    </td>
                                    <td class="py-3 px-4 align-top" rowspan="<?php echo count($order['items']); ?>">
                                        <?php echo htmlspecialchars($order['date']); ?>
                                    </td>
                                <?php endif; ?>

                                <td class="py-3 px-4 flex items-center">
                                    <img src="<?php echo htmlspecialchars($item['product_image']); ?>" alt="" class="w-10 h-10 object-cover rounded mr-2">
                                    <span><?php echo htmlspecialchars($item['product_name']); ?></span>
                                </td>
                                <td class="py-3 px-4 text-center"><?php echo $item['quantity']; ?></td>

                                <?php if ($index === 0): ?>
                                    <td class="py-3 px-4 text-right align-top" rowspan="<?php echo count($order['items']); ?>">
                                        <?php echo number_format($order['total_amount'], 0, ',', '.'); ?> vnđ
                                    </td>
                                    <td class="py-3 px-4 text-center align-top" rowspan="<?php echo count($order['items']); ?>">
                                        <span class="<?php echo (strtolower($order['payment_status']) === 'paid') ? 'text-blue-600' : 'text-yellow-600'; ?> font-semibold">
                                            <?php echo htmlspecialchars($order['payment_status']); ?>
                                        </span>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
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