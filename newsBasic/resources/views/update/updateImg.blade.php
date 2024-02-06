@extends('newsLayout')

@section('newsManagement')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Cập nhật ảnh</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('image.index') }}" class="btn btn-primary float-end">Danh sách ảnh</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('image.update', $image->Id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tên ảnh</strong>
                                <input type="text" value="{{$image->Img_Name}}" name="Img_Name" class="form-control" placeholder="Nhập tên ảnh">
                            </div>
                            <div class="form-group">
                                <strong>Url</strong>
                                <input type="text" value="{{$image->Img_Url}}" name="Img_Url" class="form-control" placeholder="Nhập link ảnh">
                            </div>
                        </div>
                        <div class="col-md-6">
                        {{-- // --}}
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
