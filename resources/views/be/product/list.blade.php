@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">




                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Parent Category</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>

                                    @if($item->parentCategory)
                                        <span class="badge badge-primary">{{$item->parentCategory->name}}</span>
                                    @endif

                                    @if(!$item->parentCategory)
                                        <span class="badge badge-primary">Do not have parent</span>
                                        @endif
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="{{route('admin.category.edit',['id'=>$item->id])}}">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="{{route('admin.category.delete',['id'=>$item->id])}}">Xoá</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <div class="float-right">
                        {{$list->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
