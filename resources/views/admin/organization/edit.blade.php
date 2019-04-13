@extends('admin.layouts.app')

@section('content')
        
   <div class="row">
        <div class="col-md-8">
            <form method="POST" action="/admin/org/{{ $org->id }}/update">
                {{ csrf_field() }}
                <div class="form-group">
                <label>Organization Name</label>
                 <input type="text" name="name" placeholder="Enter the name" class="form-control" value={{ $org->name }} >
                </div>
				
                <div class="form-group">
                    <label>Address</label>
					<input type="hidden" name="address_id" placeholder="State" class="form-control" value={{ $org->address_id }} >
					<input type="text" name="state" placeholder="State" class="form-control" value={{ $org->address->state }} >
					<input type="text" name="region" placeholder="Region" class="form-control" value={{ $org->address->region }}>
					<input type="text" name="street" placeholder="Street" class="form-control" value={{ $org->address->street }}>
					<input type="text" name="building" placeholder="Building" class="form-control" value={{ $org->address->building }}>
                </div>

                <button class="btn btn-primary">Update</button>


            </form> 
        </div>
            
    </div>
		
@endsection
