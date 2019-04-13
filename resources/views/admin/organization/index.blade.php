@extends('admin.layouts.app')

@section('content')
        

    @if($org->count())
        <a href="/admin/org/create" class="btn btn-link">Create A New Organization</a>
		<table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th> 
                    <th>Address: State</th> 
					<th>Region</th>
					<th>Street</th>
					<th>Building</th>
					<th>Edit</th>
					<th>Delete</th>
                </tr>
            </thead>
            <tbody>
    		@foreach($org as $orga)
                <tr>
                    <td>{{ $orga->name }}</td>
                    <td>{{ $orga->address->state }}</td>
					<td>{{ $orga->address->region }}</td>
					<td>{{ $orga->address->street }}</td>
					<td>{{ $orga->address->building }}</td>
					<td><form action="/admin/org/{{$orga->id}}/edit" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form></td>
    				<td>
                        <form action="/admin/org/{{$orga->id}}/delete" method="POST">
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
             No Organization Yet! You can add a <a href="/admin/org/create">New Organization</a> From here!
        </p>

    @endif
		
@endsection
