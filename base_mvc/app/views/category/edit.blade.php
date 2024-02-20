<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa danh mục</title>
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
        <form action="{{ route('edit-category/' . $categories->id) }}" method="post">
            <label for="name">Tên danh mục</label><br />
            <input type="text" id="name" name="tendanhmuc" value="{{ $categories->tendanhmuc }}" /><br>
            <button type="submit" name="Gui" value="Sửa">Sua</button>
            <button><b><a href="{{ route('list-category') }}">Quay lai</a></b></button>
        </form>
    @endsection

</body>

</html>
