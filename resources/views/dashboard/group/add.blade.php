@extends('dashboard.layout.main')
@section('content')


    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Academic  Phases System <a href="{{route('admin.group.index')}}" class="btn btn-success">Show Table</a></div>

                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="col-md-12">
                                    <form action="{{route('admin.group.store')}}" class="form-horizontal form-bordered" method="POST">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-12">Group Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="name" placeholder="Group Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Max Student Content</label>
                                                <div class="col-md-12">
                                                    <input type="number" class="form-control" name="student_counter" placeholder="Group Name">
                                                </div>
                                            </div>
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Which Role will sync this permissions </label>
                                            <select name="phase" class="custom-select my-1 mr-sm-2" id="phase" style="width: 100%">
                                                <option value="">Choose</option>
                                                @isset($phases)
                                                    @foreach($phases as $phase)
                                                        <option value="{{$phase->id}}">{{$phase->name}}</option>
                                                    @endforeach
                                                @endisset

                                            </select>
                                            @error('counter')
                                            <div class="alert alert-danger">    {{$message}} </div>
                                            @enderror

                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Which Year Will this group Belong </label>
                                            <select name="year" class="custom-select my-1 mr-sm-2" id="year" style="width: 100%">
                                                <option value="0">0</option>
                                            </select>
                                            @error('counter')
                                            <div class="alert alert-danger">    {{$message}} </div>
                                            @enderror
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Create</button>
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
        $('#phase').change(function (){
            $('#year').empty();
            $.ajax({
                url: `{{route('admin.group.create')}}`,
                method:"GET",
                dataType:'json',
                data:{
                    name: $('#phase').val(),
                },

                success: function (data){

                    $.each(data, function (key,value){
                        console.log(value.yearsCount);
                        $('#year').append(`<option value="${value.id}">${value.yearsCount}</option>`)
                    });
                }
            });
        });

    </script>
@endsection
