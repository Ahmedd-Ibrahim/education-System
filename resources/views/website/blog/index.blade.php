@extends('dashboard.layout.main')
@section('content')

            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Posts table</h4>
                    <h5 class="page-title"><a class="btn-success btn" href="{{route('admin.front.blog.create')}}">Create New Post</a></h5>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">website</a></li>
                        <li class="active">Posts Tables</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box table-responsive container-fluid">
                        <h3 class="box-title m-b-0">blog</h3>
                        <p class="text-muted m-b-20">All Posts</p>
                        {{$blogs->links()}}
                        <table id="demo-foo-row-toggler"
                         class="table color-bordered-table info-bordered-table ">
                            <thead>
                            <tr >
                                <th data-toggle="true">title</th>
                                <th data-toggle="true">intro</th>
                                <th> image </th>

                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($blogs) && count($blogs) > 0)
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->intro}}</td>

                                        <td><img style="width:100px;" src="{{url('style/front/image/'.$blog->image)}}" alt=""></td>

                                        <td>
                                            {{$blog->created_at}}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.front.blog.edit',$blog->id)}}">Edit <i class="fa fa-edit"></i></a>
                                            <form class="d-inline-block" action="{{route('admin.front.blog.destroy',$blog)}}" METHOD="POST">
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
                                <th data-toggle="true">intro</th>
                                <th> image </th>

                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                        </table>
                        {{$blogs->links()}}
                    </div>
                </div>
            </div>

    <!-- /#page-wrapper -->
@endsection
