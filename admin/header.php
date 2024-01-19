<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <style>
    .back {

        display: flex;
        justify-content: space-between;
    }

    .back a {
        text-decoration: none;
        font-size: 14px;
    }

    .back a:hover {
        font-size: 16px;
        color: brown;
    }
    </style>
</head>

<body>
    <div class="boxcenter">
        <div class="row mb headeradmin back">
            <h1>Admin</h1>
            <h1 style="margin-top: 10px; "><a href="../index.php">Về diễn đàn =></a></h1>
        </div>
        <div class="row mb menu ">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=lisdm">Danh mục</a></li>
                <li><a href="index.php?act=listsp">Hàng hóa</a></li>
                <li><a href="index.php?act=dskh">Khách hàng</a></li>
                <li><a href="index.php?act=dsbl">Bình luận</a></li>
                <li><a href="index.php?act=thongke">Thống kê</a></li>
                <li><a href="index.php?act=listbill">Danh sách đơn hàng</a></li>

            </ul>
        </div>