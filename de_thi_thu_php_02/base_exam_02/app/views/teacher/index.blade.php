<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin: 10px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    @extends('layout.main')
    @section('content')
        <a href="{{ route('add-teacher') }}">
            <button>Thêm giang vien</button>
        </a>
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Salary</th>
                <th>School</th>
                <th>Action</th>

            </thead>
            <tbody>
                @foreach ($teachers as $tc)
                    <tr>
                        <td>{{ $tc->id }}</td>
                        <td>{{ $tc->name }}</td>
                        <td>{{ $tc->email }}</td>
                        <td>{{ $tc->salary }}</td>
                        <td>{{ $tc->school }}</td>
                        <th>
                            <button> <a href="{{ route('detail-teacher/' . $tc->id) }}">Sửa</a></button>
                            <button onclick="confirmDelete('{{ route('delete-teacher/' . $tc->id) }}')">Xóa</button>
                        </th>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @endsection

    <script>
        function confirmDelete(url) {
            if (confirm('Bạn có chắc chắn muốn xóa giảng viên này?')) {
                window.location.href = url
            }
        }
    </script>

</body>

</html>
