@extends('newsLayout')

@section('newsManagement')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thêm tin tức</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('news.index')}}" class="btn btn-primary float-end">Danh sách tin tức</a>
                </div>
            </div>
        </div>
        <div class="card-body">
             <form action="{{route('news.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tiêu đề</strong>
                            <input type="text" name="Title" class="form-control" placeholder="Nhập tên tiêu đề">
                        </div>
                        <div class="form-group">
                            <strong>Nội dung</strong>
                            <input type="text" name="Content" class="form-control" placeholder="Nhập nội dung">
                        </div>
                        <div class="form-group">
                            <strong>Đường dẫn</strong>
                            <input type="text" name="News_Url" class="form-control" placeholder="Nhập đường dẫn">
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{-- <div class="form-group">
                            <strong>Giới tính</strong>
                            <select name="GioiTinh" class="form-select">
                                <option selected>Chọn giới tính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <strong>Tên ảnh</strong>
                            <select name="Img_Id" id="" class="form-select">
                                {{-- <option selected>Ẩn danh</option> --}}
                                @foreach($img as $n )
                                <option value="{{ $n->Id }}">{{ $n ->Img_Name}}</option>
                            @endforeach
                            </select>                        </div>
                        <div class="form-group">
                            <strong>Tên người viết</strong>
                            <select name="Author_Id" id="" class="form-select">
                                {{-- <option selected>Ẩn danh</option> --}}
                                @foreach($author as $n )
                                <option value="{{ $n->Author_Id }}">{{ $n ->Name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection