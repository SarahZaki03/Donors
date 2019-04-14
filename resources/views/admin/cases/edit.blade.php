@extends('admin.layouts.app')

@section('content')
        
   <div class="row">
        <div class="col-md-8">
            <form method="POST" action="/admin/cases/{{ $case->id }}/update">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter the name" class="form-control" value={{ $case->name }} >
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" >{{ $case->description }}</textarea>
                </div>
                <div class="form-group">
                    <label>Status</label> 
                    <select name="status_id" class="form-control">
                        <option>Select Option</option>
                        @foreach($statuses as $status)
							@if($case->status_id == $status->id) 
								<option value="{{ $status->id }}" selected="true">{{ $status->name}}</option>
							@else
								<option value="{{ $status->id }}">{{ $status->name}}</option>
							@endif
                             
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
				<input type="hidden" name="address_id" placeholder="State" class="form-control" value={{ $case->address_id }} >
                    State <input type="text" name="state" class="form-control" value={{ $case->address->state }} >    
                    Region <input type="text" name="region" class="form-control" value={{ $case->address->region }}>
                    street <input type="text" name="street" class="form-control" value={{ $case->address->street }}>    
                    building <input type="text" name="building" class="form-control" value={{ $case->address->building }}>    
                </div>

                <button class="btn btn-primary">Submit</button>


            </form> 
        </div>
            
    </div>
		
@endsection
