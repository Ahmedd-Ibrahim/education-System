@extends('dashboard.layout.main')
@section('content')

            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">experince table</h4>
                    <h5 class="page-title"><a class="btn-success btn" href="{{route('admin.front.site-experince.create')}}">Create New experince</a></h5>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">website</a></li>
                        <li class="active">experince Tables</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">experince</h3>
                        <p class="text-muted m-b-20">All experinces</p>
                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                            <thead>
                            <tr>
                                <th data-toggle="true">title</th>
                                <th> derscriptionn </th>
                                <th> Reword </th>
                                <th> reowrd_number </th>
                                <th> parent </th>
                                <th> parent_number </th>
                                <th> child </th>
                                <th> child_number </th>
                                <th> teacher</th>
                                <th> teacher_number </th>

                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($experince))

                                    <tr>
                                        <td>{{$experince->title}}</td>
                                        <td>{{$experince->description}}</td>
                                        <td>{{$experince->reowrd}}</td>
                                        <td>{{$experince->reowrd_number}}</td>
                                        <td>{{$experince->parent}}</td>
                                        <td>{{$experince->parent_number}}</td>
                                        <td>{{$experince->child}}</td>
                                        <td>{{$experince->child_number}}</td>
                                        <td>{{$experince->teacher}}</td>
                                        <td>{{$experince->teacher_number}}</td>
                                        <td>
                                            {{$experince->created_at}}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.front.site-experince.edit',$experince->id)}}">Edit <i class="fa fa-edit"></i></a>
                                            <form class="d-inline-block" action="{{route('admin.front.site-experince.destroy',$experince)}}" METHOD="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger d-inline-block" >Delete <i class="fa fa-trash"></i></button>

                                            </form>

                                        </td>

                                    </tr>

                                @endif
                            </tbody>
                            <thead>
                            <tr>
                                <th data-toggle="true">title</th>
                                <th> derscriptionn </th>
                                <th> Reword </th>
                                <th> reowrd_number </th>
                                <th> parent </th>
                                <th> parent_number </th>
                                <th> child </th>
                                <th> child_number </th>
                                <th> teacher</th>
                                <th> teacher_number </th>
                                <th> parent_number </th>
                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

    <!-- /#page-wrapper -->
@endsection
