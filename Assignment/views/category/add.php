<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Thêm Danh Muc</title>
    <style>
        nav {
            background-color: #f4f4f4;
            padding: 10px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        li {
            margin: 0 10px;
        }

        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #ff4500;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Thêm Danh Mục</h2>
        <?php
        // Kiểm tra nếu có thông báo lỗi trong session
        if (isset($_SESSION['error_messages'])) {
            $error_messages = $_SESSION['error_messages'];

            // // Hiển thị thông báo lỗi cho người dùng
            // foreach ($error_messages as $field => $messages) {
            //     foreach ($messages as $message) {
            //         echo '<div class="alert alert-danger" role="alert">' . $message . '</div>';
            //     }
            // }
            // // Xóa thông báo lỗi từ session sau khi hiển thị
            // unset($_SESSION['error_messages']);
        }
        ?>
        <form action="index.php?url=add-category" method="POST" ">
            <div class=" mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" name="id" placeholder="ID danh mục">
    </div>

    <div class="mb-3">
        <label for="tenDanhMuc" class="form-label">Tên danh mục</label>
        <input type="text" class="form-control" name="category_name" placeholder="Nhập tên danh mục">
        <?php
        echo (!empty($error_messages['category_name']['required'])) ? '<span style="color: red;">' . $error_messages['category_name']['required'] . '</span>' : false;
        echo (!empty($error_messages['category_name']['length'])) ? '<span style="color: red;">' . $error_messages['category_name']['length'] . '</span>' : false;
        ?>
    </div>

    <button type="submit" class="btn btn-primary" name="them">Lưu</button>
    <a href="index.php?url=list-product"> Trang Chủ</a>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>