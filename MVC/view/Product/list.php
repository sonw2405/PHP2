<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Table</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            height: 20vh;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        i {
            margin-left: 10px;
            color: #4caf50;
        }

        i:hover {
            color: blueviolet;
        }
        
        input{
           background-color: #4caf50;
            display: flex ;
            margin-top: 160px;
            margin-left: -1200px;
            height: 30px;
            width: 50px;
            border: 1px ;
        } -->
    </style>
</head>

<body>
    <form action="" method="post">
    <input type="search" name="timkiem" id="">
        <input type="button" value="Tìm kiếm">
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Mô tả</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($product as $key => $value){?>
            <tr>
                <td><?php echo $value["id"]?></td>
                <td><?php echo $value["product_name"] ?></a></td>
                <td><?php echo $value["price"]?></td>
                <td><?php echo $value["image"]?></td>
                <td><?php echo $value["describe"]?></td>
                <td>
                    <a href="index.php?url=edit-product"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
           <?php }?>
        </tbody>
    </table>
    <div class="add">
        <a href="index.php?url=add-product"><input type="button" value="Add"></a>
    </div>
    </form>
</body>

</html>