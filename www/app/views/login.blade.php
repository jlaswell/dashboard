@extends('layouts.foundation')

@section('title')
	Dashboard
@stop

@section('content')
	<div class="row">
		<div class="large-4 large-offset-4 columns">
			<h4 class="subheader">Login</h4>
			{{ Form::open(array('url' => '/')) }}
			<div class="row">
				<div class="large-12 columns
					@if( Input::has('email_error'))
						error
					@endif
				">
					{{ Form::label('email', 'Email') }}
					{{ Form::email('email', '', array('placeholder' => 'yourhandle@domain.com')) }}
					@if( Input::has('email_error'))
      			<small>{{ $email_error }}</small>
      		@endif
    	  </div>
    	</div>
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password') }}
				{{ Form::submit('Login') }}
			{{ Form::close() }}
		</div>
	</div>
@stop