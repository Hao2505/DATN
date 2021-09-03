{{-- @php
    dd($order)
@endphp --}}

@extends('backend.layout.basic_table')

@section('title', 'Edit posts')

{{-- @section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')

    @php
    $categories = get_books_categories();
    @endphp

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">View order</div>
                </div>

                <div>
                    <input type="hidden" name="id" value="{{ $order->id }}">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mb-3">Infomation: </label>
                                    <div class="row">
                                        <div class="col-12 col-md-5 mb-4">
                                            <label>Name</label>
                                            <input value="{{ $order->name }}" type="text" class="form-control" disabled>
                                        </div>
                                        <div class="col-12 col-md-5 mb-4">
                                            <label>Phone</label>
                                            <input value="{{ $order->phone }}" type="text" class="form-control" disabled>
                                        </div>
                                        <div class="col-12 col-md-10 mb-4">
                                            <label>Email</label>
                                            <input value="{{ $order->email }}" type="text" class="form-control" disabled>
                                        </div>
                                        <div class="col-md-12"></div>
                                        <div class="col-12 col-md-10">
                                            <label for="content">Address</label>
                                            <textarea class="form-control" rows="5"
                                                disabled>{{ $order->address }} {{ $order->ls_ward }} {{ $order->ls_district }} {{ $order->ls_province }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-3">Product: </label>
                                    <div class="row">
                                        @foreach ($products as $key => $item)
                                            @if($item[1]>0)
                                                <div class="col-12">
                                                    <div class="row border">
                                                        <div class="col-4">
                                                            <img class="img-fluid" src="/storage/{{ $item[0]->image }}"
                                                                alt="">
                                                        </div>
                                                        <div class="col-8">
                                                            <div>
                                                                <p>{{ $item[0]->name }}</p>
                                                                <p>Qty: {{ $item[1] }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div class="col-12">
                                            <p class="mt-5 mb-2">Total: {{ number_format($order->price) }} vnđ</p>
                                            <p class="mb-2">Time: {{ $order->created_at }}</p>
                                            <p class="mb-2">Note: {{ $order->note }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-5">
                                <form action="{{ route('get.update.status.order') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $order->id }}" name="id">
                                    <label class="mb-3">Status</label>
                                    <select class="form-control text-white" name="status" value="{{ $order->status }}"
                                        style="background-color: {{ $order->status == -1 ? '#ed6b75' : '' }} {{ $order->status == 2 ? '#36c6d3' : '' }} {{ $order->status == 0 ? '#f1c40f' : '' }} {{ $order->status == 1 ? '#659be0' : '' }}"
                                        {{ $order->status == 2 || $order->status == -1 ? 'disabled' : '' }}>
                                        <option value="-1" {{ $order->status == -1 ? 'selected' : '' }}>Canceled</option>
                                        <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Pending</option>
                                        <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Delivering</option>
                                        <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Completed</option>
                                    </select>
                                    <div class="text-center mt-5">
                                        @if ($order->status != 2 && $order->status != -1)
                                            <button type="submit" class="btm btn-primary pl-4 pr-4">Lưu</button>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
