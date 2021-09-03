{{-- @php
    dd($book)
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
                    <div class="panel-heading">Edit books</div>
                </div>
                
                <div>
                    <form action="{{ route('post.edit.book') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $book->id }}">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12 mb-5">
                                        <label for="name">Name</label>
                                        <input value="{{ $book->name }}" id="name" name="name" type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-12 mb-5">
                                        <label for="description">description</label>
                                        <textarea name="description" id="description" style="width: 100%; padding: 12px" rows="5">{{ $book->description }}</textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="content">content</label>
                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ $book->content }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <label for="name">category</label>
                                    <select class="form-control" name="category" value="{{ $book->categories }}">
                                        <option hidden {{ $book->categories == null ? 'selected' : '' }} value="">Select category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}" {{ $book->categories == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>                                          
                                </div>
                                <div class="mb-5">
                                    <label for="qty">Qty</label>
                                    <input id="qty" name="qty" value="{{ $book->qty }}" type="text" class="form-control">
                                </div>
                                <div class="mb-5">
                                    <label for="price">Price</label>
                                    <input id="price" name="price" value="{{ $book->price }}" type="text" class="form-control">
                                </div>
                                <div  class="mb-5">
                                    <label>Image</label>
                                    <input name="image" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            <img class="img-fluid" src="/storage/{{ $book->image }}" alt="">
                                        </div>
                                    </div>
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

