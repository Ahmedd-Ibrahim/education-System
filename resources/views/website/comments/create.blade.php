@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Create New comment</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.front.comment.store')}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">email</label>
                                    <div class="col-md-9">
                                        <input type="email" placeholder="email" class="form-control" name="email">

                                </div>
                                </div>
                                @error('email')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="name" class="form-control" name="name">

                                    </div>

                                </div>
                                @error('name')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">content</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="content" class="form-control" name="content">
                                    </div>

                                </div>
                                @error('name')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                        @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">which Post ?</label>
                                    <div class="col-md-9">
                                        <select name="blog_id" id="" class="form-control">
                                            @isset($blogs)
                                            @foreach ($blogs as $blog)
                                            <option value="{{$blog->id}}">{{$blog->title}}</option>
                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>
                                @error('blog_id')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                @enderror
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                                                <button type="button" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./row-->
@endsection
