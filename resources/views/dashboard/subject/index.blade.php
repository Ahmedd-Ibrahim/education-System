@extends('dashboard.layout.main')
@section('content')

            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Subject table</h4>
                    <h5 class="page-title"><a class="btn-success btn" href="{{route('admin.subject.create')}}">Create New Subject</a></h5>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Subjects</a></li>
                        <li class="active">Subjects Tables</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Subjects</h3>
                        <p class="text-muted m-b-20">All Subjects</p>
                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                            <thead>
                            <tr>
                                <th data-toggle="true">Name</th>
                                <th> Description </th>
                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($subjects) && count($subjects) > 0)
                                @foreach($subjects as $subject)
                                    <tr>
                                        <td>{{$subject->name}}</td>
                                        <td>{{$subject->desc}}</td>
                                        <td>
                                            {{$subject->created_at}}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.subject.edit',$subject->id)}}">Edit <i class="fa fa-edit"></i></a>
                                            <form class="d-inline-block" action="{{route('admin.subject.destroy',$subject)}}" METHOD="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger d-inline-block" >Delete <i class="fa fa-trash"></i></button>

                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                            <thead>
                            <tr>
                                <th data-toggle="true">Name</th>
                                <th> Description </th>

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
