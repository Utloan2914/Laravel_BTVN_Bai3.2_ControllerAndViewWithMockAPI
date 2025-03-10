<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Danh sách sản phẩm</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại</th>
                    <th>Mô tả</th>
                    <th>Giá gốc</th>
                    <th>Giá khuyến mãi</th>
                    <th>Hình ảnh</th>
                    <th>Đơn vị</th>
                    <th>Mới</th>
                    <th>Ngày tạo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->id_type }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ number_format($product->unit_price, 0, ',', '.') }} VND</td>
                    <td>{{ number_format($product->promotion_price, 0, ',', '.') }} VND</td>
                    <td>
                        <img src="{{ asset('source/image/product/'.$product->image) }}" alt="{{ $product->name }}" width="80">
                    </td>

                    <td>{{ $product->unit }}</td>
                    <td>{{ $product->new ? 'Có' : 'Không' }}</td>
                    <td>{{ $product->created_at ? $product->created_at->format('d-m-Y') : 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>