@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <form method="POST" action="/admin/cases">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter the name" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status_id" class="form-control" required>
                        <option>Select Option</option>
                        @foreach($statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    State <input type="text" name="state" class="form-control">    
                    Region <input type="text" name="region" class="form-control">
                    street <input type="text" name="street" class="form-control">    
                    building <input type="text" name="building" class="form-control">    
                </div>

                <button class="btn btn-primary">Submit</button>


            </form> 
        </div>
            
    </div>
    
    
		
@endsection
