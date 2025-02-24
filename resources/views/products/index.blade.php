@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Danh sách sản phẩm</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Ngày tạo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td><img src="{{ $product['avatar'] }}" alt="Hình ảnh" width="50" height="50"></td>
                    <td>{{ date('d/m/Y H:i', strtotime($product['createdAt'])) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
