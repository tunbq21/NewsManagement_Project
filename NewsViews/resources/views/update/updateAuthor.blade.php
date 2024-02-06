@extends('newsLayout')

@section('newsManagement')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>update tác giả</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('author.index')}}" class="btn btn-primary float-end">Danh sách tác giả</a>
                </div>
            </div>
        </div>
        <div class="card-body">
             <form action="{{route('author.update', $author['Author_Id'])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tiêu tác giả</strong>
                            <input type="text" value="{{$author['Name']}}" name="Name" class="form-control" placeholder="Nhập tên tác giả">
                        </div>
                        <div class="form-group">
                            <strong>Email</strong>
                            <input type="text" value="{{$author['Email']}}" name="Email" class="form-control" placeholder="Nhập Email">
                        </div>
                        <div class="form-group">
                            <strong>Đường dẫn trang cá nhân</strong>
                            <input type="text" value="{{$author['Author_Url']}}" name="Author_Url" class="form-control" placeholder="Nhập đường dẫn trang cá nhân">
                        </div>
                <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
@endsection