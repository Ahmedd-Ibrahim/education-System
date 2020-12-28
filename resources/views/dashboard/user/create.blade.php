@extends('dashboard.layout.main')
@section('content')


    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Add New User </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="col-md-12">

                                    <form class="form-material form-horizontal" method="POST" action="{{route('admin.users.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text">Name
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="name" class="form-control" placeholder="User Name">
                                            </div>
                                        </div>
                                        @error('name')
                                        <div class="alert alert-danger"> {{$message}} </div>
                                        @enderror

                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text">email
                                            </label>
                                            <div class="col-md-12">
                                                <input type="email" id="example-text" name="email" class="form-control" placeholder="email@example">
                                            </div>
                                        </div>
                                        @error('email')
                                        <div class="alert alert-danger"> {{$message}} </div>
                                        @enderror

                                        <div class="form-group">
                                            <label class="col-md-12" for="password">password
                                            </label>
                                            <div class="col-md-12">
                                                <input type="password" id="password" name="password" class="form-control" placeholder="password">
                                            </div>
                                        </div>
                                        @error('password')
                                        <div class="alert alert-danger"> {{$message}} </div>
                                        @enderror
                                        <label class="my-1 mr-2" for="role">Which Role this user belong! </label>
                                        <select  name="role" class="custom-select my-1 mr-sm-2" id="role" style="width: 100%">
                                            <option value="">Choose</option>
                                            @if(isset($roles) && count($roles) > 0)
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('role')
                                        <div class="alert alert-danger"> {{$message}} </div>
                                        @enderror
                                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10" style="margin-top: 5px;">Submit</button>
                                            <button type="submit" class="btn btn-inverse waves-effect waves-light" style="margin-top: 5px;">Cancel</button>
                                    </form>
                                </div>

                                <div class="clearfix"></div>
                                {{--                                        End of add Form--}}
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
