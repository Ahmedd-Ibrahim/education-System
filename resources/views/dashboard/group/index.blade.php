@extends('dashboard.layout.main')
@section('content')
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">System Academic Groups  table <a style="margin-top: 10px" href="{{route('admin.group.create')}}" class="btn btn-success">Create The system Table</a></h4>
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
                                <th> Group Name </th>
                                <th> phase</th>
                                <th> Year</th>
                                <th data-hide="all"> Created at </th>
                                <th> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($groups) && count($groups) > 0)
                                @foreach($groups as $group)
                                    <tr>
                                        <td>{{$group->id}}</td>
                                        <td>{{$group->name}}</td>
                                        <td>
                                            {{$group->PhaseYear->Phase->name}}

                                        </td>
                                        <td>
                                            {{ $group->PhaseYear->yearsCount}}
                                            Years
                                        </td>
                                        <td>
                                            <a href="{{route('admin.group.edit',$group)}}" class="btn btn-primary">Edit  <i class="fa fa-edit"></i></a>
                                            <form class="d-inline-block" action="{{route('admin.group.destroy',$group)}}" METHOD="POST">
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
                                <th> Group Name </th>
                                <th> phase</th>
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
