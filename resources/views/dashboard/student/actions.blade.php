
{!! Form::open(['route' => ['admin.student.destroy', $id], 'method' => 'delete']) !!}

<div class='btn-group' >
    <a href="{{ route('admin.student.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>

    <a class="btn default btn-outline  btn-xs" href="{{route('admin.student-register.edit',$id)}}">
        <i class="fa fa-table"></i>
    </a>

    @can('edit student')
    <a href="{{ route('admin.student.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    @endcan
    @can('delete student')
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
    @endcan
</div>
{!! Form::close() !!}
