<!-- resources/views/components/ProductList.blade.php -->

<div>
    @foreach ($products as $product)
        <p>{{ $product->name }}</p>
        <!-- Hiển thị các thuộc tính sản phẩm khác nếu cần -->
    @endforeach
</div>
