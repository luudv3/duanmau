<?php
session_start();
extract($_SESSION['user']);
?>

<div class="row frmtitle mb10">
    <H1>XIN CHÀO ADMIN : <?php echo $user ?></H1>
</div>
<main>
    <section>
        <h2>Tổng quan</h2>
        <div class="total">
            <p>Tiền bán hàng: <strong>0</strong></p>
            <p>Số đơn hàng: <strong>0</strong></p>
            <p>Số sản phẩm: <strong>0</strong></p>
        </div>
    </section>
    <section>
        <h2>Hoạt động</h2>
        <table>
            <thead>
                <tr>
                    <th>Thời gian</th>
                    <th>Tiền bán hàng</th>
                    <th>Số đơn hàng</th>
                    <th>Số sản phẩm</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10/10/2023</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section>
        <h2>Thông tin kho</h2>
        <table>
            <thead>
                <tr>
                    <th>Tên kho</th>
                    <th>Tình trạng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kho chính</td>
                    <td>Đầy</td>
                </tr>
                <tr>
                    <td>Kho phụ</td>
                    <td>Hết hàng</td>
                </tr>
            </tbody>
        </table>
    </section>
</main>