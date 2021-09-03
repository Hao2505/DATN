{{-- @php
    dd($post)
@endphp --}}

@extends('backend.layout.basic_table')

@section('title', 'List category')

{{-- @section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">List category book</div>
                    <a href="{{ route('get.create.category.book') }}" style="position: absolute; right: 30px;top: 50%; transform: translateY(-50%)">create</a>
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
                                <th class="text-center" style="width: 150px">updated_at</th>
                                <th class="text-center" style="width: 150px">created_at</th>
                                <th style="width: 20px">edit</th>
                                <th style="width: 20px">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
                                <tr data-expanded="true">
                                    <td>{{ $item->id }}</td>
                                    <td><a href="{{ route('post.edit.category.book', $item->id) }}">{{ $item->name }}</a></td>
                                    <td class="text-center">{{ $item->updated_at }}</td>
                                    <td class="text-center">{{ $item->created_at }}</td>
                                    <td><a href="{{ route('post.edit.category.book', $item->id) }}">Sửa</a></td>
                                    <td><a href="{{ route('post.delete.category.book', $item->id) }}">Xóa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection

