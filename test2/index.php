<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
    <!--Thêm liên kết Bootstrap CSS-->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!-- Thêm liên kết đến trang thêm mới sinh viên và trang chỉnh sửa sinh viên -->
<a href="add_student.php" class="btn btn-primary">Thêm mới sinh viên</a>
<!-- Thêm liên kết đến trang chính (danh sách sinh viên) và trang chỉnh sửa sinh viên -->
<a href="index.php" class="btn btn-secondary">Danh sách sinh viên</a>


    <div class="container mt-5">
        <h1 class="mb-4">Danh sách sinh viên</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Tuổi</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sinh viên 1</td>
                    <td>20</td>
                    <td>Hà Nội</td>
                    <td>1234567890</td>
                    <td>
                        <a href="view_student.php?id=1" class="btn btn-info">Xem</a>
                        <a href="edit_student.php?id=1" class="btn btn-warning">Chỉnh sửa</a>
                        <a href="delete_student.php?id=1" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>Sinh viên 2</td>
                    <td>22</td>
                    <td>Hồ Chí Minh</td>
                    <td>9876543210</td>
                    <td>
                        <a href="view_student.php?id=2" class="btn btn-info">Xem</a>
                        <a href="edit_student.php?id=2" class="btn btn-warning">Chỉnh sửa</a>
                        <a href="delete_student.php?id=2" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <!-- Hiển thị danh sách sinh viên từ cơ sở dữ liệu -->
                <!-- Thay thế các thông tin sinh viên bằng dữ liệu thực tế từ cơ sở dữ liệu -->
            </tbody>
        </table>
        <a href="add_student.php" class="btn btn-primary">Thêm mới sinh viên</a>
    </div>

    <!--Thêm liên kết Bootstrap JavaScript và jQuery-->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

