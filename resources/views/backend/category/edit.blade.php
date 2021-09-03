{{-- @php
    dd($post)
@endphp --}}

@extends('backend.layout.basic_table')

@section('title', 'Edit category')

{{-- @section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">Edit category</div>
                </div>
                
                <div>
                    <form action="{{ route('post.edit.category') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="name">Name</label>
                                        <input value="{{ $category->name }}" id="name" name="name" type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="description">description</label>
                                        <input value="{{ $category->description }}" id="description" name="description" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                
                            </div>
                            <div class="col-lg-9 mt-4">
                                <div class="text-center">
                                    <button type="submit" class="btm btn-primary pl-4 pr-4">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

