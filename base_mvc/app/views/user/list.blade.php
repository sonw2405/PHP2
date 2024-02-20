<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách người dùng</title>
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
            background-color: #3356be;
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
        {{--    @php(var_dump($users)) --}}
        {{--    @endphp --}}
        <a href="{{ route('add-user') }}" class="btn btn-primary mb-3">Thêm</a>
        <table class="table table-bordered table-striped" border="1">
            <tr>
                <th>ID</th>
                <th>Ten</th>
                <th>So dien thoai</th>
                <th>Email</th>
                <th>Tuoi</th>
                <th>Dia chi</th>
                <th>Thao tác</th>
            </tr>
            @foreach ($users as $value)
                <tr>
                    <th>{{ $value->id }}</th>
                    <th>{{ $value->name }}</th>
                    <th>{{ $value->sdt }}</th>
                    <th>{{ $value->email }}</th>
                    <th>{{ $value->age }}</th>
                    <th>{{ $value->address }}</th>
                    <th>
                        <a href="{{ route('detail-user/' . $value->id) }}" class="btn btn-primary btn-sm me-2">Sửa</a>
                        <a href="{{ route('delete-user/' . $value->id) }}" class="btn btn-danger btn-sm">Xóa</a>
                    </th>
                </tr>
            @endforeach
        </table>
        <h1 class="text-center">Chào mừng đến với bình nguyên vô tận</h1>
    @endsection

</body>

</html>
