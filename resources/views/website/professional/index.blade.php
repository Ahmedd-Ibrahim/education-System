@extends('dashboard.layout.main')
@section('content')

            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">professional table</h4>
                    <h5 class="page-title"><a class="btn-success btn" href="{{route('admin.front.professional.create')}}">Create New professional</a></h5>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">website</a></li>
                        <li class="active">professional Tables</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">professionals</h3>
                        <p class="text-muted m-b-20">All professionals</p>
                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                            <thead>
                            <tr>
                                <th data-toggle="true">name</th>
                                <th data-toggle="true">job title</th>
                                <th data-toggle="true">description</th>
                                <th> image </th>
                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($professionals) && count($professionals) > 0)
                                @foreach($professionals as $professional)
                                    <tr>
                                        <td>{{$professional->name}}</td>
                                        <td>{{$professional->job_name}}</td>
                                        <td>{{$professional->description}}</td>

                                        <td><img style="width:100px;" src="{{url('style/front/image/'.$professional->image)}}" alt=""></td>
                                        <td>
                                            {{$professional->created_at}}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.front.professional.edit',$professional->id)}}">Edit <i class="fa fa-edit"></i></a>
                                            <form class="d-inline-block" action="{{route('admin.front.professional.destroy',$professional)}}" METHOD="POST">
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
                                <th data-toggle="true">job title</th>
                                <th> Description </th>
                                <th> image </th>
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
