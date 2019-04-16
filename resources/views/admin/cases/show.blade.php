@extends('admin.layouts.app')

@section('content')
        
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="    margin-left: 0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Case Name
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div>

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <h3 class="profile-username text-center">{{ $case->name }}</h3>

              <p class="text-muted text-center">{{ $case->status->name }}</p>
				<strong><i class="fa fa-book margin-r-5"></i> Description</strong>

              <p class="text-muted">
               {{ $case->description }}
              </p>
              <ul class="list-group list-group-unbordered">
				<li class="list-group-item">
                  <b>Status</b> <a class="pull-right">{{ $case->status->name }}</a>
                </li>
				<li class="list-group-item">
                  <b>Done</b> <a class="pull-right">
					@if ($case->done == 1)
    						Done
    					@elseif ($case->done == 0)
    						No
    					@endif</a>
                </li>
              </ul>
              <a href="#" class="btn btn-primary"><b>Follow</b></a>
            </div>
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div >
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Comments</a></li>
              <!--<li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>-->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                        <span class="username">
                          <a href="#">Registered user name</a> 
                        </span> 
                  </div>
                  <!-- /.user-block -->
                  <input class="form-control" type="text" style="height: 100px; margin-left: 50px; width: 70%;" placeholder="Type a comment">
				  <a href="#" class="btn btn-primary" style="margin-left: 50px; margin-top: 20px;"><b>Comment</b></a>
                </div>
                <!-- /.post -->
@if($comments->count())
                <!-- Post -->
				@foreach($comments as $comment)
                <div class="post clearfix">
                  <div class="user-block"> 
                        <span class="username">
                          <a href="#"> User Name</a> 
                        </span>
                    <span class="description">{{ $comment->created_at }}</span>
                  </div>
                  <!-- /.user-block -->
                  <p style="margin-left: 50px;"> {{ $comment->name }}
                  </p>
                </div>
				@endforeach
                <!-- /.post -->
 @else

        <p class="text-center">
             No Comments Yet!  
        </p>

    @endif
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
@endsection
