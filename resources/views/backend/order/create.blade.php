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

    @php
        $categories = get_post_categories();
    @endphp

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">Create book</div>
                </div>
                
                <div>
                    <form action="{{ route('post.store.book') }}" method="post" enctype="multipart/form-data">
                        @csrf  
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12 mb-5">
                                        <label for="name">Name</label>
                                        <input id="name" name="name" type="text" class="form-control">
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
                                    <label for="name">category</label>
                                    <select class="form-control" name="category">
                                        <option hidden selected value="">Select category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>                                          
                                </div>
                                <div class="mb-5">
                                    <label for="qty">Qty</label>
                                    <input id="qty" name="qty" type="text" class="form-control">
                                </div>
                                <div class="mb-5">
                                    <label for="price">Price</label>
                                    <input id="price" name="price" type="text" class="form-control">
                                </div>
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

