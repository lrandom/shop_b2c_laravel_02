@extends('be.layout')
@section('main-content')
    <form method="GET" action="{{route('admin.product.search')}}">
        <input type="text" name="q"/>
        <button>Tìm kiếm</button>
    </form>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    @if($item->images && count($item->images)>0)
                                        <img width="100px" src="{{asset($item->images[0]->path)}}" alt="{{$item->name}}"/>
                                        @else
                                        <img src="https://via.placeholder.com/150
C/O https://placeholder.com/"/>
                                    @endif
                                </td>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>

                                    @if($item->category)
                                        <span class="badge badge-primary">{{$item->category->name}}</span>
                                    @endif

                                    @if(!$item->category)
                                        <span class="badge badge-primary">Do not have category</span>
                                        @endif
                                </td>
                                <td>
                                    {{$item->quantity}}
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                       href="{{route('admin.product.edit',['id'=>$item->id])}}">Sửa</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="{{route('admin.product.delete',['id'=>$item->id])}}">Xoá</a>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá ?')" href="{{route('admin.product.delete',['id'=>$item->id])}}">Chi tiết sản phẩm</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <div class="float-right">
                        {{$list->withQueryString()->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
