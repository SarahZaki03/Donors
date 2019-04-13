@if($errors->all())
<div class="container">
	<div class="alert alert-danger pops" id="pops" role="alert" v-show="show">
		@foreach($errors->all() as $error)
      		{{ $error }}<br>
		@endforeach
		<button type="button" class="close" aria-label="Close" onclick="hide()">
		  <span aria-hidden="true">&times;</span>
		</button>
    </div>
</div>
@endif