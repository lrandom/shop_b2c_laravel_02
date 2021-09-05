@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Add Variant</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.variant.doAdd')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                   value="{{old('name')}}">
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
