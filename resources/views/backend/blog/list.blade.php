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
                    <div class="panel-heading">List post</div>
                    <a href="{{ route('get.create.post') }}" style="position: absolute; right: 30px;top: 50%; transform: translateY(-50%)">create</a>
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
                                <th style="width: 100px">Image</th>
                                <th>Name</th>
                                <th class="text-center" style="width: 150px">categories</th>
                                <th class="text-center" style="width: 150px">updated_at</th>
                                <th class="text-center" style="width: 150px">created_at</th>
                                <th style="width: 20px">edit</th>
                                <th style="width: 20px">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                                <tr data-expanded="true">
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a href="{{ route('get.store.edit', $item->id) }}">
                                            <img style="width: 100px; height: 100px; object-fit: cover;" src="/storage/{{ $item->image }}" alt="">
                                        </a>
                                    </td>
                                    <td><a href="{{ route('get.store.edit', $item->id) }}">{{ $item->name }}</a></td>
                                    <td class="text-center">
                                        @if (isset($item->category))
                                            {{ get_post_category_by_id($item->category)->name}}
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $item->updated_at }}</td>
                                    <td class="text-center">{{ $item->created_at }}</td>
                                    <td><a href="{{ route('get.store.edit', $item->id) }}">Sửa</a></td>
                                    <td><a href="{{ route('post.delete.post', $item->id) }}">Xóa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- @php
        dd($posts);
    @endphp --}}

@endsection

