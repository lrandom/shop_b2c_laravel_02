@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Variant Value</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.variant_value.doEdit',['id'=>$obj->id])}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Name"
                                   value="{{$obj->name}}">
                        </div>

                        <div class="form-group">
                            <label for="">Variant</label>
                            <select name="variant_id" class="form-control">
                                @foreach($variants as $variant)
                                    <option value="{{$variant->id}}">{{$variant->name}}</option>
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
            <!-- /.card -->
        </div>
    </div>
@endsection
