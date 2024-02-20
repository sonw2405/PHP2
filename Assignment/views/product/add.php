<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Thêm Khóa Học</title>
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
        <h2 class="mb-4">Thêm Khóa Học</h2>
        <?php
        // Kiểm tra nếu có thông báo lỗi trong session
        if (isset($_SESSION['error_messages'])) {
            $error_messages = $_SESSION['error_messages'];
        }
        ?>
        <form action="index.php?url=add-product" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="tenSanPham" class="form-label">Tên Khóa Học</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên Khóa Học">
                <?php
                echo (!empty($error_messages['name']['required'])) ? '<span style="color: red;">' . $error_messages['name']['required'] . '</span>' : false;
                echo (!empty($error_messages['name']['length'])) ? '<span style="color: red;">' . $error_messages['name']['length'] . '</span>' : false;
                ?>


            </div>

            <div class="mb-3">
                <label for="gia" class="form-label">Giá</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá Khóa Học">
            </div>

            <div class="mb-3">
                <label for="hinhAnh" class="form-label">Hình Ảnh</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            <div class="mb-3">
                <label for="danhMuc" class="form-label">Danh Mục</label>
                <select class="form-select" id="id_category" name="id_category">
                    <?php foreach ($listCategory as $valueCT) { ?>
                        <option value="<?php echo $valueCT["id"] ?>"><?php echo $valueCT["category_name"] ?></option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="Save">Thêm</button>
            <a href="index.php?url=list-product"> Trang Chủ</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>