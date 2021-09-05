@extends('be.layout')
@section('main-content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Add User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.user.doAdd')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name"
                                   value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email"
                                   value="{{old('email')}}">
                            @if($errors->has('email'))
                                <span style="color: red">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">FullName</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Enter Username"
                                   value="{{old('full_name')}}">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password"
                                   value="{{old('password')}}">
                            @if($errors->has('password'))
                                <span style="color: red">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone"
                                   value="{{old('phone')}}">
                        </div>

                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">Staff</option>
                                <option value="3">User</option>
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
