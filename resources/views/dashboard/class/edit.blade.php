@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Add New Class <a href="{{route('admin.class.index')}}" class="btn btn-success">Show Class Table</a></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="col-md-12">

                                    <form action="{{route('admin.class.update',$class->id)}}" class="form-horizontal form-bordered" method="POST">
                                        @csrf
                                        @method("PATCH")
                                        <div class="form-body">

                                            <div class="form-group">
                                                <label class="col-md-12">Class Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="name" placeholder="Class Name" value="{{$class->name}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">How many Students Will be in This class? <span class="text-info">optional right now</span> </label>
                                                <div class="col-md-12">
                                                    <input type="number" class="form-control" name="container" placeholder="container" value="{{$class->container}}">
                                                </div>
                                            </div>

                                            <label class="my-1 mr-2" for="phase">Which Education Phase this class Belongs! </label>
                                            <select  name="phase" class="custom-select my-1 mr-sm-2" id="phase" style="width: 100%">
                                                <option value="">Choose</option>
                                                @if(isset($phases) && count($phases) > 0)
                                                    @foreach($phases as $phase)
                                                        <option @if($class->PhaseYear->Phase->id == $phase->id) selected @endif value="{{$phase->id}}">{{$phase->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('phase')
                                            <div class="alert alert-danger">    {{$message}} </div>
                                            @enderror

                                            <label class="my-1 mr-2" for="phaseYear">Which  Year this class Belongs! </label>
                                            <select name="phaseYear" class="custom-select my-1 mr-sm-2" id="phaseYear" style="width: 100%">
                                                <option value="">Choose</option>

                                                <option selected value="{{$class->PhaseYear->id}}">{{$class->PhaseYear->yearsCount}}</option>

                                            </select>
                                            @error('phaseYear')
                                            <div class="alert alert-danger">    {{$message}} </div>
                                            @enderror

                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update </button>
                                                            <a href="{{route('home')}}" type="button" class="btn btn-default">Cancel</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix"></div>
                                {{--                                        End of add Form--}}
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--./row-->

    <script>
        $('#phase').change(function() {
            $('#phaseYear').empty()
            $.ajax({
                url:`{{route('admin.class.create')}}`,
                method:"GET",
                dataType: 'json',
                data:{
                    name: $('#phase').val(),
                },
                success: function (data){
                    $.each(data, function (key, value){
                        $('#phaseYear').append(`<option value="${value.id}">${value.yearsCount}</option>`)
                    });
                    console.log(data);
                }
            })
        })
    </script>
@endsection
