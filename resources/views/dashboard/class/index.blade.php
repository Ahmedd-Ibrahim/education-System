@extends('dashboard.layout.main')
@section('content')
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">System Classes table <a style="margin-top: 10px" href="{{route('admin.class.create')}}" class="btn btn-primary">Create New Class</a></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">System</a></li>
                        <li class="active">Academic Phases</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                            <thead>
                            <tr>
                                <th data-toggle="true">ID</th>
                                <th> Class Name </th>
                                <th> belongs to year </th>
                                <th> Education Phase </th>
                                <th data-hide="all"> Created at </th>
                                <th> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($classes) && count($classes) > 0)
                                @foreach($classes as $class)
                                    <tr>
                                        <td>{{$class->id}}</td>
                                        <td>{{$class->name}}</td>
                                        <td>
                                            @isset($class->PhaseYear)
                                                {{$class->PhaseYear->yearsCount}}
                                            @endisset
                                        </td>
                                        <td>
                                            @isset($class->PhaseYear)
                                                {{$class->PhaseYear->Phase->name}}
                                            @endisset
                                        </td>
                                        <td>
                                            {{$class->created_at}}
                                        </td>
                                        <td>
                                            <a href="{{route('admin.class.edit',$class)}}" class="btn btn-primary">Edit  <i class="fa fa-edit"></i></a>

                                            <form class="d-inline-block" action="{{route('admin.class.destroy',$class)}}" METHOD="POST">
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
                                <th data-toggle="true">ID</th>
                                <th> Class Name </th>
                                <th> belongs to year </th>
                                <th> Education Phase</th>
                                <th data-hide="all"> Created at </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
    <!-- /#page-wrapper -->
@endsection
