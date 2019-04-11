@extends('admin.layouts.app')

@section('content')
        

    @if($cases->count())
        <a href="/admin/cases/create" class="btn btn-link">Create A New Case</a>
		<table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Edit</th>
    				<th>Delete</th>
                </tr>
            </thead>
            <tbody>
    		@foreach($cases as $case)
                <tr>
                    <td>{{ $case->name }}</td>
                    <td>{{ $case->description }}</td>
                    <td>
                        {{ $case->address->state }} /
                        {{ $case->address->region }} /
                        {{ $case->address->street }} /
                        {{ $case->address->building }}
                    </td>
                    <td>
    					@if ($case->done == 1)
    						Done
    					@elseif ($case->done == 0)
    						No
    					@endif
    				</td>
                    <td>Edit</td>
    				<td>
                        <form action="/admin/cases/{{$case->id}}/delete" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
    		@endforeach
    		</tbody>
            
        </table>
    @else

        <p class="alert alert-danger text-center">
             No Cases Yet! You can add a <a href="/admin/cases/create">New Case</a> From here!
        </p>

    @endif
		
@endsection
