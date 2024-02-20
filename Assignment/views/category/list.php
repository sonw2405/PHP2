<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bảng Danh Mục</title>
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
    <h2 class="mb-4">Danh sách Danh Mục</h2>

    <!-- Nút Thêm -->
    <a href="index.php?url=add-category" class="btn btn-primary mb-3">Thêm</a>

    <!-- Bảng Bootstrap -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên danh mục</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listCategory as  $key => $value){?>
        <tr>
            <th scope="row"><?php echo $value["id"] ?></th>
            <td><?php echo $value["category_name"] ?></td>
            <td>
                <a href="index.php?url=update-category&category_id=<?php echo $value["id"] ?>" class="btn btn-warning">Sửa</a>
                <a href="index.php?url=delete-category&category_id=<?php echo $value["id"] ?>" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <!-- Kết thúc Bảng Bootstrap -->
</div>

<!-- Bao gồm Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var btn_delete = document.getElementsByClassName('btn-delete')[0];
        console.log(btn_delete);
        btn_delete.onclick = function() {
            var check = prompt("Ban co chac muon xoa?");
            console.log(check);
            // Gửi giá trị 'check' về server bằng Ajax
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "DeleteProductController.php?check=" + encodeURIComponent(check), true);
            xhr.send();
        }
    });
</script> -->
</body>
</html>
