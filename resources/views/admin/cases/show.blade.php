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

              <h3 class="profile-username text-center">Case Name</h3>

              <p class="text-muted text-center">Case Status</p>
				<strong><i class="fa fa-book margin-r-5"></i> Description</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>
              <ul class="list-group list-group-unbordered">
				<li class="list-group-item">
                  <b>Status</b> <a class="pull-right">Emergency</a>
                </li>
				<li class="list-group-item">
                  <b>Done</b> <a class="pull-right">No</a>
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
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span> 
                  </div>
                  <!-- /.user-block -->
                  <input class="form-control" type="text" style="height: 100px; margin-left: 50px; width: 70%;" placeholder="Type a comment">
				  <a href="#" class="btn btn-primary" style="margin-left: 50px; margin-top: 20px;"><b>Comment</b></a>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block"> 
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p style="margin-left: 50px;">
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                </div>
                <!-- /.post -->
 
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
		
@endsection
