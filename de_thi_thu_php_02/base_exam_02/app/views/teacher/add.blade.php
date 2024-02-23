@extends('layout.main')
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
    <form action="{{ route('post-teacher') }}" method="post">
        <label>Tên</label>
        <input type="text" name="name">
        <label>Email</label>
        <input type="text" name="email">
        <label>Năm sinh</label>
        <input type="text" name="salary">
        <label>Trường</label>
        <input type="text" name="school">
        <input type="submit" name="btn-submit" value="Gửi">
    </form>
@endsection
