@extends('dashboard.layout.main')
@section('content')

            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">comments table</h4>
                    <h5 class="page-title"><a class="btn-success btn" href="{{route('admin.front.comment.create')}}">Create New comment</a></h5>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">website</a></li>
                        <li class="active">comments Tables</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">comment</h3>
                        <p class="text-muted m-b-20">All comments</p>
                        {{$comments->links()}}
                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover table-responsive-sm">
                            <thead>
                            <tr>
                                <th data-toggle="true">email</th>
                                <th data-toggle="true">name</th>
                                <th data-toggle="true">content</th>

                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($comments) && count($comments) > 0)
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$comment->email}}</td>
                                        <td>{{$comment->name}}</td>
                                        <td>{{$comment->content}}</td>
                                        <td>
                                            {{$comment->created_at}}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.front.comment.edit',$comment->id)}}">Edit <i class="fa fa-edit"></i></a>

                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.front.active',$comment->id)}}">



                                                @if ($comment->active == 'false')
                                                activate <i class="fa fa-check-circle"></i>
                                                @else

                                                Deactive <i class="fa fa-times-circle"></i>

                                                @endif
                                            </a>
                                            <form class="d-inline-block" action="{{route('admin.front.comment.destroy',$comment)}}" METHOD="POST">
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

                                <th data-toggle="true">email</th>
                                <th data-toggle="true">name</th>
                                <th data-toggle="true">content</th>
                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>

                            </tr>
                            </thead>
                        </table>
                        {{$comments->links()}}
                    </div>
                </div>
            </div>

    <!-- /#page-wrapper -->
@endsection
