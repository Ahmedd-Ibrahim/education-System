@extends('dashboard.layout.main')
@section('content')

            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">proof table</h4>
                    <h5 class="page-title"><a class="btn-success btn" href="{{route('admin.front.proof.create')}}">Create New proof</a></h5>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">website</a></li>
                        <li class="active">Proof Tables</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">proof</h3>
                        <p class="text-muted m-b-20">All proof</p>
                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                            <thead>
                            <tr>
                                <th data-toggle="true">title</th>
                                <th data-toggle="true">description</th>
                                <th data-toggle="true">sub title</th>
                                <th> image </th>
                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($proofs) && count($proofs) > 0)
                                @foreach($proofs as $proof)
                                    <tr>
                                        <td>{{$proof->title}}</td>
                                        <td>{{$proof->description}}</td>
                                        <td>{{$proof->sub_title}}</td>
                                        <td><img style="width:100px;" src="{{url('style/front/image/'.$proof->image)}}" alt=""></td>
                                        <td>
                                            {{$proof->created_at}}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.front.proof.edit',$proof->id)}}">Edit <i class="fa fa-edit"></i></a>
                                            <form class="d-inline-block" action="{{route('admin.front.proof.destroy',$proof)}}" METHOD="POST">
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

                                <th data-toggle="true">title</th>
                                <th data-toggle="true">description</th>
                                <th data-toggle="true">sub title</th>
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
