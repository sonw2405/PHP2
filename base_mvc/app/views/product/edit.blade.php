<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa sản phẩm</title>
    <style>
        form {
            margin: 0 auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            margin-top: 20px;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    @extends('layout.main');
    @section('content')
        @if (isset($_SESSION['errors']) && isset($_GET['msg']))
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @if (isset($_SESSION['success']) && isset($_GET['msg']))
            <span>{{ $_SESSION['success'] }}</span>
        @endif
        <form action="{{ route('edit-product/' . $products->id) }}" method="post">
            <label>Tên</label>
            <input type="text" name="ten" value="{{ $products->tensanpham }}">
            <label>Giá</label>
            <input type="text" name="gia" value="{{ $products->gia }}">
            {{-- <label>Danh mục</label> --}}
            {{-- <select name="danhmuc" id="">
            <option value="">Chọn danh mục</option>
            @foreach ($danhmuc as $value)
                <option value="{{ $value->iddm }}">{{ $value->tendm }}</option>
            @endforeach
        </select> --}}

            <button type="submit" name="gui" value="Gui">Gui</button>
            <button><a href="{{ route('list-product') }}">Quay lai</a></button>
        </form>
    @endsection

</body>

</html>
