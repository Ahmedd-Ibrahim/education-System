@extends('dashboard.layout.main')
@section('content')
@section('head')
{{--  will push cdn to head --}}
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection
    <!--.row-->

    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Create New POST</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.front.blog.store')}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tilte</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Post title" class="form-control" name="title">
                                        </div>
                                </div>
                                @error('title')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">intro</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="description" class="form-control" name="intro">
                                        <span class="help-block">Intro for post  </span> </div>
                                </div>

                                @error('intro')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">post Image</label>
                                    <div class="col-md-9">
                                        <input type="file" placeholder="Description" class="form-control" name="image">
                                        <span class="help-block"> Post Image</span>
                                    </div>

                                </div>
                                @error('image')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                        @enderror

                            </div>
                            <textarea name="content"></textarea>
                            @error('content')
                            <div class="alert alert-danger">  {{$message}} </div>
                            @enderror
                            <script>
                                    CKEDITOR.replace( 'content' ); // editor setup
                            </script>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./row-->
@endsection
