@extends('frontend.layout.no-slider')

@section('main')

    <div style="padding: 20px 0 100px 0">
        <div class="container">
            <h1 class="text-center text-black" style="padding-bottom: 40px">GIỎ HÀNG</h1>
            @if(count($books) > 0)
                <form action="{{ route('frontend.update.cart') }}" method="POST">
                    @csrf
                    <table class="table" ui-jq="footable" ui-options='{
                        "paging": {
                        "enabled": true
                        },
                        "filtering": {
                        "enabled": true
                        },
                        "sorting": {
                        "enabled": true
                        }}'>
                        <thead>
                            <tr>
                                <th style="width: 20px">STT</th>
                                <th style="width: 100px">Hình ảnh</th>
                                <th>Tên sách</th>
                                <th class="text-center" style="width: 150px">Số lượng</th>
                                <th class="text-center" style="width: 150px">Đơn giá</th>
                                <th class="text-center" style="width: 150px">Thành tiền</th>
                                <th style="width: 20px">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $key => $item)
                            <input type="hidden" name="id[]" value="{{ $item->id }}">
                                <tr data-expanded="true" class="item-cart">
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <a href="">
                                            <img style="width: 100px; height: 100px; object-fit: cover;"
                                                src="/storage/{{ $item->image }}" alt="">
                                        </a>
                                    </td>
                                    <td><a href="">{{ $item->name }}</a></td>
                                    <td class="text-center">
                                        <input type="number" class="qty-cart" value="{{ $qty[$item->id] }}" max="{{ $item->qty }}"
                                            name="qty[{{ $item->id }}]" min="0" style="width: 50px" onkeydown="return false">
                                    </td>
                                    <td class="text-center">{{ number_format($item->price) }} vnđ</td>
                                    <td class="text-center">{{ number_format($item->price * $qty[$item->id]) }} vnđ</td>
                                    <td><a class="delete_cart" data-id="{{ $item->id }}">Xóa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Cập nhập giỏ hàng</button>
                        <button class="btn btn-primary" onclick="javascript:location.href='{{ route('frontend.checkout') }}'" type="button">Tiến hành đặt hàng</button>
                    </div>
                </form>
            @else

            <div class="text-center">
                Chưa có sản phẩm nào
            </div>

            @endif
        </div>
    </div>

@endsection
