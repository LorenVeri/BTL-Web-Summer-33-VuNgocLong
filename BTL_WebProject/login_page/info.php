<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4c6704ba9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS for me -->
    <link rel="stylesheet" href="./assets/style_admin.css">
    <link rel="stylesheet" href="./assets/style_info.css">
    <title> Quản lý người dùng</title>

</head>


<?php
include("./assets/config/connect-tlu.php");
// require ("../login_page/user-manager/edit_user.php");
if (isset($_POST['submit_add'])) {
    $avatar =  $_POST['avatar'];
    $fullname =  $_POST['fullname'];
    $email =  $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $id_dv = $_POST['id_dv'];
    $id_cv = $_POST['id_cv'];
    // Mã hóa password

    $sql = "INSERT INTO can_bo(avatar, fullname, email, phone_number, address, id_don_vi, id_chuc_vu) 
                   VALUES ('$avatar', '$fullname', '$email', '$phone_number', '$address', '$id_dv', '$id_cv')";

    if (mysqli_query($conn, $sql)) {
        header('location: admin.php');
    }
}
?>

<body>
    <?php
    include("./assets/template/header_teamplate.php");
    ?>
    <!-- Header -->
    <div class="wrapper">
        <div class="container">
            <!-- Title -->
            <div class="header-main">
                <i class="fas fa-home"></i> <i class="fas fa-angle-right" style="padding: 0 10px;"></i> <span>Thông tin</span>
                <h2>Thêm mới</h2>
            </div>
            <!-- Form info -->
            <div class="row">
                <div class="col-sm bd-rd">
                    <div class="card-body">
                        <form method="POST" role="form" id="form_Signin" action="./info.php">
                        <div class="form-name">
                                <span for="form-name" class="f-right">Ảnh đại diện</span>
                                <input type="text" class="form-control f-n" name="avatar">
                            </div>
                            <div class="form-username">
                                <span for="form-username" class="f-right">Tên giảng viên</span>
                                <input type="text" class="form-control f-n" name="fullname">
                            </div>
                            <div class="form-email">
                                <span for="pass_signin" class="f-right">Địa chỉ Email</span>
                                <input type="email" class="form-control f-m" name="email">
                            </div>
                            <div class="form-cv">
                                <span for="form-cv" class="f-right">Số điện thoại</span>
                                <input type="text" class="form-control f-m" name="phone_number">
                            </div>
                            <div class="form-work">
                                <span for="form-work" class="f-right">Địa chỉ nhà</span>
                                <input type="text" class="form-control f-m" name="address">
                            </div>
                            <div class="form-email">
                                <span for="form-email" class="f-right">Đơn vị</span>
                                <input type="text" class="form-control f-m" name="id_dv">
                
                            </div>
                            <div class="form-phone">
                                <span for="form-phone" class="f-right">Chức vụ</span>
                                <input type="text" class="form-control f-m" name="id_cv">
                            </div>
                            <button class="btn btn-danger f-bot" id="submit_add" name="submit_add" style="margin-top: 20px;">Thêm mới</button>
                            <a href="./admin.php" class="btn btn-danger f-bot" style="margin-top: 20px;">Hủy</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Header -->
    <!-- Wrapper -->
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>