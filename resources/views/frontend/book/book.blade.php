@extends('frontend.layout.no-slider')

@section('main')

    @php
        $related_book = get_books_by_category($book->categories, 4, $book->id);
    @endphp

    <section class="tts-box-payment">
        <div class="container">
            <div class="tts-make-center">

                <div class="tts-title-payment">
                    <h1 class="text-uppercase">{{ $book->name }}</h1>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="/storage/{{ $book->image }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                {!! $book->description !!}
                                {!! $book->content !!}
                                <form action="{{ route('frontend.add.to.cart') }}" class="form-add-to-cart" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $book->id }}" name="id">
                                    @if ((isset(session('cart_df')[$book->id]) && session('cart_df')[$book->id] ==
                                    $book->qty) || $book->qty == 0)
                                    <button class="btn btn-primary" disabled>Sách đã bán hết</button>
                                @else
                                    <button class="btn btn-primary" type="submit">Thêm vào giỏ hàng</button>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <h3>SÁCH CÙNG THỂ LOẠI</h3>
            <div class="row">
                @foreach ($related_book as $item)
                    <div class="col-lg-3 tts-col-box-item">
                        <div class="tts-item-book" style="height: 100%; position: relative;">
                            <img class="img-fluid" src="/storage/{{ $item->image }}"
                                onclick="javascript:location.href='{{ route('frontend.get.post', $item->id) }}'"
                                style="height: 300px; object-fit: cover; cursor: pointer" alt="">
                            <form action="{{ route('frontend.add.to.cart') }}" class="form-add-to-cart" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="id">
                                @if ((isset(session('cart_df')[$item->id]) && session('cart_df')[$item->id] == $item->qty)
                                || $item->qty == 0)
                                <button class="btn btn-primary" disabled>Thêm</button>
                            @else
                                <button class="btn btn-primary" type="submit">Thêm</button>
                @endif
                <a class="btn btn-light" type="button" href="{{ route('frontend.get.book', $item->id) }}">Xem</a>
                </form>
            </div>
        </div>
        @endforeach
        </div>
        </div>
    </section>

@endsection
