<!DOCTYPE html>
<html>
<head>
    <title>Thêm mới sinh viên</title>
    <!-- Thêm liên kết Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Thêm liên kết đến trang chính (danh sách sinh viên) và trang chỉnh sửa sinh viên -->
<a href="index.php" class="btn btn-secondary">Danh sách sinh viên</a>


    <div class="container mt-5">
        <h1>Thêm mới sinh viên</h1>
        <form>
            <div class="form-group">
                <label for="name">Tên sinh viên:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="age">Tuổi:</label>
                <input type="text" class="form-control" id="age" name="age">
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="index.php" class="btn btn-secondary">Hủy</a>
        </form>
    </div>

    <!-- Thêm liên kết Bootstrap JavaScript và jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
