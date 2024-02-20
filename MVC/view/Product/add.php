<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Người Dùng</title>
</head>

<body>

    <h2>Thêm sản phẩm</h2>

    <form action="" method="post">

        <label for="id">ID</label>
        <input type="text" name="id" required>
        <br>
        <label for="tensanpham">Tên sản phẩm</label>
        <input type="date" name="product_name" required>
        <br>
        <label for="gia">Giá</label>
        <input type="text" name="price" required>
        <br>
        <label for="img">HÌnh ảnh</label>
        <input type="file" name="image" required>
        <br>
        <label for="mota">Mô tả</label>
        <input type="text" name="describe" required>
        <br>

        <input type="submit" value="Submit" >
    </form>
    <a href="index.php?url=list-product"><input type="button" value="Quay lại"></a>
</body>

</html>