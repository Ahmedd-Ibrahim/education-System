@extends('dashboard.layout.main')
@section('content')
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">System Academic Phases Years  table <a style="margin-top: 10px" href="{{route('admin.studyPhase.create')}}" class="btn btn-primary">Create The system Table</a></h4>
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
                                <th> Phase Name </th>
                                <th> Years of The Phase</th>
                                <th data-hide="all"> Created at </th>
                                <th> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($phases) && count($phases) > 0)
                                @foreach($phases as $phase)
                                    <tr>
                                        <td>{{$phase->id}}</td>
                                        <td>{{$phase->name}}</td>
                                        <td>
                                            @isset($phase->PhaseYear)
                                                    {{count($phase->PhaseYear)}} Years
                                            @endisset
                                        </td>
                                        <td>
                                            {{$phase->created_at}}
                                        </td>
                                        <td>
                                            <a href="{{route('admin.studyPhase.edit',$phase)}}" class="btn btn-primary">Edit  <i class="fa fa-edit"></i></a>
                                            <form class="d-inline-block" action="{{route('admin.studyPhase.destroy',$phase)}}" METHOD="POST">
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
                                <th> Phase Name </th>
                                <th> Years of The Phase</th>
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
