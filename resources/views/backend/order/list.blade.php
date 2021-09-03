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
                <div style="position: relative">
                    <div class="panel-heading">List orders</div>
                </div>
                
                <div>
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
                            @foreach ($orders as $item)
                                <tr data-expanded="true">
                                    <td>{{ $item->id }}</td>
                                    <td><a href="{{ route('get.details.order', $item->id) }}">{{ $item->name }}</a></td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td><a style=" width: 105px; text-align: center;color: white;display: inline-block;padding: 5px 0;background-color: {{ $item->status == -1 ? '#ed6b75' : '' }} {{ $item->status == 2 ? '#36c6d3' : '' }} {{ $item->status == 0 ? '#f1c40f' : '' }} {{ $item->status == 1 ? '#659be0' : '' }}">{{ $item->status == -1 ? 'Canceled' : '' }} {{ $item->status == 0 ? 'Pending' : '' }} {{ $item->status == 1 ? 'Delivering' : '' }} {{ $item->status == 2 ? 'Completed' : '' }}</a></td>
                                    <td class="text-center">{{ $item->created_at }}</td>
                                    <td><a href="{{ route('get.details.order', $item->id) }}">xem</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

