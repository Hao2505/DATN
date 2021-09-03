{{-- @php
    dd($post)
@endphp --}}

@extends('backend.layout.basic_table')

@section('title', 'List posts')

{{-- @section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">

                <div class="row p-5">

                    <div class="col-4">
                        <div class="border d-flex flex-column justify-content-center align-items-center bg-primary text-white position-relative"
                            style="height: 150px; border-radius: 10px">
                            <h4>{{ number_format($report['revenue']) }} vnđ</h4><i class="fa fa-money position-absolute"
                                style="right: 15px; top: 15px"></i>
                            <h6 class="text-white-50">TODAY REVENUE</h6>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="border d-flex flex-column justify-content-center align-items-center bg-secondary text-white position-relative"
                            style="height: 150px; border-radius: 10px">
                            <h4>{{ $report['qty_order'] }}</h4><i class="fa fa-shopping-cart position-absolute"
                                style="right: 15px; top: 15px"></i>
                            <h6 class="text-white-50">TODAY ORDERS</h6>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="border d-flex flex-column justify-content-center align-items-center bg-warning text-white position-relative"
                            style="height: 150px; border-radius: 10px">
                            <h4>{{ $report['qty_book'] }}</h4><i class="fa fa-book position-absolute"
                                style="right: 15px; top: 15px"></i>
                            <h6 class="text-white-50">TOTAL PRODUCTS</h6>
                        </div>
                    </div>

                    <form action="{{ route('get.order.search') }}">
                        <div class="col-12 mt-3">
                            <label class="mr-4">Date</label>
                            from:
                            <input class="date" type="text" name="from" value="@if (request()->input('from')) {{ request()->input('from') }} @endif">
                            to:
                            <input class="date" type="text" name="to" value="@if (request()->input('to')) {{ request()->input('to') }} @endif">
                        </div>
                        <div class="col-12 mt-3">
                            <label class="mr-4">Info</label>
                            Name:
                            <input class="mr-2" type="text" name="name" value="@if (request()->input('name')) {{ request()->input('name') }} @endif">
                            Phone:
                            <input class="mr-2" type="text" name="phone" value="@if (request()->input('phone')) {{ request()->input('phone') }} @endif">
                            Email:
                            <input class="mr-2" type="text" name="email" value="@if (request()->input('email')) {{ request()->input('email') }} @endif">
                        </div>
                        <div class="col-12 mt-3 text-center mb-5">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                    @if (isset($orders_search))
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
                                    <th style="width: 20px">ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th class="text-center" style="width: 150px">Created_at</th>
                                    <th style="width: 20px">View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders_search as $item)
                                    <tr data-expanded="true">
                                        <td>{{ $item->id }}</td>
                                        <td><a href="{{ route('get.details.order', $item->id) }}">{{ $item->name }}</a>
                                        </td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->status == 0 ? 'Pending' : '' }}
                                            {{ $item->status == 1 ? 'Delivering' : '' }}
                                            {{ $item->status == 2 ? 'Completed' : '' }}</td>
                                        <td class="text-center">{{ $item->created_at }}</td>
                                        <td><a href="{{ route('get.details.order', $item->id) }}">xem</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                </div>
            </div>
        </div>
    </section>

@endsection
