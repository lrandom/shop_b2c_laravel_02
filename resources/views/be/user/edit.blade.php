@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.user.doEdit',['id'=>$obj->id])}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Email address</label>
                            <input name="email" type="email" class="form-control" placeholder="Enter email" value="{{$obj->email}}">
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input name="name" type="text" class="form-control" placeholder="Username" value="{{$obj->name}}">
                        </div>

                        <div class="form-group">
                            <label>FullName</label>
                            <input name="full_name" type="text" class="form-control" placeholder="Fullname" value="{{$obj->full_name}}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input name="phone" type="phone" class="form-control" placeholder="Phone" value="{{$obj->phone}}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option value="1" <?php if($obj->level==1){echo 'selected="selected"';}?>>Admin</option>
                                <option value="2" <?php if($obj->level==2){echo 'selected="selected"';}?>>Staff</option>
                                <option value="3" <?php if($obj->level==3){echo 'selected="selected"';}?>>User</option>
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
