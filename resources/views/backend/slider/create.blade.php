{{-- @php
    dd($post)
@endphp --}}

@extends('backend.layout.basic_table')

@section('title', 'Create posts')

{{-- @section('sidebar')
    @parent
        
    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">Create slider</div>
                </div>
                
                <div>
                    <form action="{{ route('post.store.slider') }}" method="post" enctype="multipart/form-data">
                        @csrf  
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12 mb-5">
                                        <label for="name">Title</label>
                                        <input id="name" name="title" type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-12 mb-5">
                                        <label for="description">description</label>
                                        <textarea name="description" id="description" style="width: 100%; padding: 12px" rows="5"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="content">content</label>
                                        <textarea class="form-control" name="content" id="content" cols="30" rows="50"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <label>Image</label>
                                    <input name="image" type="file">
                                </div>
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

