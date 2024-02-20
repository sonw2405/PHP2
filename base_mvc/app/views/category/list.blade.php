<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách danh mục</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        h1 {
            margin-top: 50px;
            color: #000000;
        }

        table {
            width: 100%;
            margin: 50px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #6d8a0b;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-primary:hover,
        .btn-danger:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>

<body>

    @extends('layout.main');
    @section('content')
        {{--    @php(var_dump($products)) --}}
        {{--    @endphp --}}

        <a href="{{ route('add-category') }}" class="btn btn-primary mb-3">Thêm</a>
        <table class="table table-bordered table-striped" border="1">
            <tr>
                <th>ID</th>
                <th>Ten danh muc</th>
                <th>Thao tac</th>
            </tr>
            @foreach ($categories as $value)
                <tr>
                    <th>{{ $value->id }}</th>
                    <th>{{ $value->tendanhmuc }}</th>
                    <th>
                        <a href="{{ route('detail-category/' . $value->id) }}" class="btn btn-primary btn-sm me-2">Sửa</a>
                        <a href="{{ route('delete-category/' . $value->id) }}" class="btn btn-danger btn-sm">Xóa</a>
                    </th>
                </tr>
                {{-- @if (isset($_SESSION['errors']) && isset($_GET['msg']))
                    <ul>
                        @foreach ($_SESSION['errors'] as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}
                {{-- @if (isset($_SESSION['success']) && isset($_GET['msg']))
                    <span>{{ $_SESSION['success'] }}</span>
                @endif --}}
            @endforeach
        </table>
        <h1 class="text-center">Chào mừng đến với bình nguyên vô tận</h1>
    @endsection
</body>

</html>
