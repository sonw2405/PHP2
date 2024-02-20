<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Cập Nhật Danh Mục</title>
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
    <h2 class="mb-4">Cập Nhật Danh Mục</h2>
    <form action="index.php?url=update-category&category_id=<?php echo $category['id'] ?>" method="POST" enctype="multipart/form-data">
        <?php if($category) { ?>
            <div class="mb-3">
                <label for="tenSanPham" class="form-label">Tên Danh Mục</label>
                <input type="text" class="form-control" id="name" name="catogory_name" value="<?php echo $category['catogory_name'] ?>" >
            </div>
           
        <?php } ?>
        

        <button type="submit" class="btn btn-primary" name="update">Cập nhật</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
