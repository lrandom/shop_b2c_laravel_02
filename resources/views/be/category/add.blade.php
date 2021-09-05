@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.category.doAdd')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name"
                                   value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                            <label for="">Parent Category</label>
                            <select name="parent_id" class="form-control">
                                <option value="0">No Parent</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
