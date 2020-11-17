@extends('dashboard.layout.main')
@section('content')

            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Roles table</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Roles</a></li>
                        <li class="active">Roles Tables</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Roles</h3>
                        <p class="text-muted m-b-20">All System Roles</p>
                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                            <thead>
                            <tr>
                                <th data-toggle="true">Name</th>
                                <th> Description </th>
                                <th data-hide="phone">Permission on </th>
                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Controller </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($roles) && count($roles) > 0)
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->description}}</td>
                                        <td>
                                            @if(isset($role->permissions) && count($role->permissions) > 0)
                                                @foreach($role->permissions as $per)
                                            {{$per->name}} <br>
                                                @endforeach
                                                @endif
                                        </td>
                                        <td>{{$role->created_at}}</td>
                                        <td><span class="label label-table label-success">Active</span></td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                            <thead>
                            <tr>
                                <th data-toggle="true">Name</th>
                                <th> Description </th>
                                <th data-hide="phone">Permission on </th>
                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Controller </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

    <!-- /#page-wrapper -->
@endsection
