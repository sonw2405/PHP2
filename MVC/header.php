<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Example</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            padding: 10px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }

        li {
            display: inline;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 10px;
            display: inline-block;
        }

        a:hover {
            background-color: #555;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="">Giới thiệu</a></li>
            <li><a href="index.php?url=list-product">Danh sách sản phẩm</a></li>
            <li><a href="">Liên hệ</a></li>
        </ul>
    </nav>

</body>

</html>