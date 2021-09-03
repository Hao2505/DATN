{{-- @php
    dd($aboutushome)
@endphp --}}

@extends('backend.layout.basic_table')

@section('title', 'Edit posts')

{{-- @section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')

    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div style="position: relative">
                    <div class="panel-heading">Edit post</div>
                </div>
                
                <div>
                    <form action="{{ route('post.edit.aboutushome') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12 mb-5">
                                        <label for="name">Title</label>
                                        <input value="@if(isset($aboutushome->title)){{ $aboutushome->title }}@endif" id="name" name="title" type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="content">content</label>
                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10">@if(isset($aboutushome->content)){{ $aboutushome->content }}@endif</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div  class="mb-5">
                                    <label>Image 1</label>
                                    <input name="image_1" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            @if(isset($aboutushome->image_1))
                                                <img class="img-fluid" src="/storage/{{ $aboutushome->image_1 }}" alt="">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div  class="mb-5">
                                    <label>Image 2</label>
                                    <input name="image_2" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            @if(isset($aboutushome->image_2))
                                                <img class="img-fluid" src="/storage/{{ $aboutushome->image_2 }}" alt="">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div  class="mb-5">
                                    <label>Image 3</label>
                                    <input name="image_3" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            @if(isset($aboutushome->image_3))
                                                <img class="img-fluid" src="/storage/{{ $aboutushome->image_3 }}" alt="">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div  class="mb-5">
                                    <label>Image 4</label>
                                    <input name="image_4" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            @if(isset($aboutushome->image_4))
                                                <img class="img-fluid" src="/storage/{{ $aboutushome->image_4 }}" alt="">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div  class="mb-5">
                                    <label>Image 5</label>
                                    <input name="image_5" type="file">
                                    <div class="row mt-4">
                                        <div class="col-lg-9 col-md-12">
                                            @if(isset($aboutushome->image_5))
                                                <img class="img-fluid" src="/storage/{{ $aboutushome->image_5 }}" alt="">
                                            @endif
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

