@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <form method="POST" action="/admin/cases">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter the name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status_id" class="form-control">
                        <option>Select Option</option>
                        @foreach($statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-primary">Submit</button>


            </form> 
        </div>
            
    </div>
    
    
		
@endsection
