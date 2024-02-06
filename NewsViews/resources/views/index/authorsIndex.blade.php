@extends('newsLayout')


@section('newsManagement')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý tin tức</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('author.create')}}" class="btn btn-primary float-end">Thêm mới</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('thongbao'))
                        <div class="alert alert-success">
                            {{ Session::get('thongbao') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th>Id</th>
                                <th>Tác giả</th>
                                <th>Email</th>
                                <th>Url</th>
                                <th>Tương tác</th>
      
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($author as $n )
                                <tr>
                                    <td>{{ $n['Author_Id']}}</td>
                                    <td>{{ $n['Name']}}</td>
                                    <td>{{ $n['Email']}}</td>
                                    <td>{{ $n['Author_Url']}}</td>
                                    <td>
                                        <form action="{{route('author.destroy',$n['Author_Id'])}}" method="POST">
                                            <a href="{{route('author.edit', $n['Author_Id'])}}" class="btn btn-info">Sửa</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
