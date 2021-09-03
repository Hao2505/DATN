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
                    <div class="panel-heading">List newsletter</div>
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
                                <th>email</th>
                                <th>phone</th>
                                <th class="text-center" style="width: 150px">created_at</th>
                                <th style="width: 20px">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newsletter as $item)
                                <tr data-expanded="true">
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        {{ $item->email }}
                                    </td>
                                    <td>
                                        {{ $item->phone }}
                                    </td>
                                    <td class="text-center">{{ $item->created_at }}</td>
                                    <td><a href="{{ route('newsletter.delete.post', $item->id) }}">Xóa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $newsletter->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

