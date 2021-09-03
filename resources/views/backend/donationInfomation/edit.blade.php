{{-- @php
    dd($info)
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
                    <form action="{{ route('post.edit.donationinfomation') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <table style="width: 100%">
                                    <tr>
                                        <td class="pb-3" style="width: 20%"><label class="mr-5" for="name">Title:</label></td>
                                        <td class="pb-3"><input value="@if(isset($info->title)){{ $info->title }}@endif" id="name" name="title" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="abbot_phone">Abbot's phone:</label></td>
                                        <td class="pb-3"><input value="@if(isset($info->abbot_phone)){{ $info->abbot_phone }}@endif" id="abbot_phone" name="abbot_phone" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="office_phone">Office's phone:</label></td>
                                        <td class="pb-3"><input value="@if(isset($info->office_phone)){{ $info->office_phone }}@endif" id="office_phone" name="office_phone" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="secretary_phone">Secretary's phone:</label></td>
                                        <td class="pb-3"><input value="@if(isset($info->secretary_phone)){{ $info->secretary_phone }}@endif" id="secretary_phone" name="secretary_phone" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="email">Email:</label></td>
                                        <td class="pb-3"><input value="@if(isset($info->email)){{ $info->email }}@endif" id="email" name="email" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="address">Address:</label></td>
                                        <td class="pb-3"><input value="@if(isset($info->address)){{ $info->address }}@endif" id="address" name="address" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="Bank_account">Bank account:</label></td>
                                        <td class="pb-3"><input value="@if(isset($info->Bank_account)){{ $info->Bank_account }}@endif" id="Bank_account" name="Bank_account" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="Bank_number">Bank number:</label></td>
                                        <td class="pb-3"><input value="@if(isset($info->Bank_number)){{ $info->Bank_number }}@endif" id="Bank_number" name="Bank_number" type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3"><label class="mr-5" for="Bank_name">Bank name:</label></td>
                                        <td class="pb-3"><input value="@if(isset($info->Bank_nane)){{ $info->Bank_nane }}@endif" id="Bank_name" name="Bank_name" type="text" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-lg-12 mt-4">
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

