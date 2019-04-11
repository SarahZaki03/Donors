@extends('adminTemplate')

@section('content')
 
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Address</th>
                <th>Status</th>
                <th>Done or No</th>
                <th>Edit</th>
				<th>Delete</th>
            </tr>
        </thead>
        <tbody>
		@foreach($cases as $cases)
            <tr>
                <td>{{ $cases->name }}</td>
                <td>{{ $cases->description }}</td>
                <td>{{ $cases->state }} {{ $cases->region }} {{ $cases->street }} {{ $cases->building }}</td>
                <td>{{ $cases->sName }}</td>
                <td>
					@if ($cases->done == 1)
						Done
					@elseif ($cases->done == 0)
						No
					@endif
				</td>
                <td>Edit</td>
				<td><a href="/delete/{{ $cases->id }}">Delete</a></td>
            </tr>
		@endforeach
		</tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Address</th>
                <th>Status</th>
                <th>Done or No</th>
                <th>Edit</th>
				<th>Delete</th>
            </tr>
        </tfoot>
    </table>
		
@endsection
