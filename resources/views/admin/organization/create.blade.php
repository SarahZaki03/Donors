@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <form method="POST" action="/admin/org">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Organization Name</label>
                    <input type="text" name="name" placeholder="Enter the name" class="form-control">
                </div>
				
                <div class="form-group">
                    <label>Address</label>
					<input type="text" name="state" placeholder="State" class="form-control">
					<input type="text" name="region" placeholder="Region" class="form-control">
					<input type="text" name="street" placeholder="Street" class="form-control">
					<input type="text" name="building" placeholder="Building" class="form-control">
                </div>

                <button class="btn btn-primary">Submit</button>


            </form> 
        </div>
            
    </div>
    
    
		
@endsection
