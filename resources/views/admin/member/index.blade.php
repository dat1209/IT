@extends('admin.layout.header')

@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="p-b-20"><a class="btn btn-outline-primary" href="{{route('admin.addmember')}}">Thêm mới</a></div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Img</th>
                        <th>Team</th>
                        <th>decription</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($member as $a)
                        <td>{{$a->id}}</td>
                        <td>{{$a->name}}</td>
                        <td><img src="{{asset('assets/img/upload/'.$a->img)}}"></td>
                        <td>{{$a->team}}</td>
                        <td>{{$a->decription}}</td>
                        <td>
                            <a class="btn btn-outline-success" href="{{route('admin.addmember')}}">Sửa</a>
                            <a class="btn btn-outline-danger">Xóa</a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
        <div class="p-b-20"><a class="btn btn-outline-primary" href="{{route('admin.addmember')}}">Thêm mới</a></div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Img</th>
                    <th>Team</th>
                    <th>decription</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($member as $a)
                    <td>{{$a->id}}</td>
                    <td>{{$a->name}}</td>
                    <td><img src="{{asset('assets/img/upload/'.$a->img)}}"></td>
                    <td>{{$a->team}}</td>
                    <td>{{$a->decription}}</td>
                    <td>
                        <a class="btn btn-outline-success" href="{{route('admin.addmember')}}">Sửa</a>
                        <a class="btn btn-outline-danger">Xóa</a>
                    </td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('js')

@endpush
