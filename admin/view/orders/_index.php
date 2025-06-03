<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tổng quan - SB Admin</title>
    <link rel="shortcut icon" href="../../public/img/logo/123.png" type="image/x-icon">
    <link href="../../public/admin/css/style.css" rel="stylesheet" />
    <script src="../../public/admin/js/all.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="sb-nav-fixed">
    <?php include_once '../view/inc/_navbar.php' ?>
    <div id="layoutSidenav">
        <?php include_once '../view/inc/_sideleft.php' ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tổng quan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Tổng quan</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>ID</th>
                                        <th>Mã đơn</th>
                                        <th>Trạng thái</th>
                                        <th>Người dùng</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Trạng thái thanh toán</th>
                                        <th>Ngày</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>ID</th>
                                        <th>Mã đơn</th>
                                        <th>Trạng thái</th>
                                        <th>Người dùng</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Trạng thái thanh toán</th>
                                        <th>Ngày</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $index = 0; ?>
                                    <?php foreach ($order_list as $order) { ?>
                                        <tr>
                                            <td>
                                                <?php echo ++$index; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['code']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['status']; ?>
                                            </td>
                                            <td>
                                                <?php echo get_user($order['users_id'])['name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['address']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['phone']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['payment_status']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['date']; ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary"
                                                    href="edit.php?order_id=<?php echo $order['id']; ?>">Sửa</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger"
                                                    href="delete.php?order_id=<?php echo $order['id']; ?>">Xoá</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../../public/admin/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../public/admin/js/scripts.js"></script>
    <script src="../../public/admin/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="../../public/admin/js/simple-datatables@latest.js" crossorigin="anonymous"></script>
    <script src="../../public/admin/js/datatables-simple-demo.js"></script>
</body>

</html>