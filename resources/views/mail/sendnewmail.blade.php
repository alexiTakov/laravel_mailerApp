@extends('welcome')



@section('content')



<div class="container">
	<div class="row">

		<div class="col-sm-12">
			<h1>Laravel Mail App</h1>

			@if(Session::has('flashmessage'))
			
			<div class="alert alert-success">				
				<button type="button" class="close" data-dismiss =
				"alert" aria-hidden="true" > &times; </button>
				<strong> {{ Session::get('flashmessage') }}</strong>
			</div>
			

			@endif


		</div>

		<div class="col-sm-12">
			<form action="{{ url('mail/sendmail') }}"  method="POST"  class="form-horizontal" role="form" >
				<input type="hidden"  name="_token"  value="{{ csrf_token() }}">
				<div class="form-group">
					<legend>Send an email to anyone </legend>
				</div>


				<div class="form-group">
					<label for="email">Sending to who?</label>
					<input type="email" name="email" value="{{ Input::old('email') }}" class="form-control" placeholder="Type an email"  >
				</div>


				<div class="form-group">
					<label for="subject">Mail Subject</label>
					<input type="subject" name="subject" value="{{ Input::old('subject') }}" class="form-control" placeholder="Subjct"  >
				</div>


				<div class="form-group">
					<label for="message">Your message</label>
					<textarea rows="5" cols="20" id="message" type="text" name="message" value="{{ Input::old('message') }}" class="form-control ckeditor " placeholder="Type a message"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>

			</form>
		</div>
		
	</div>
</div>


<div class="container">
	
	<div class="row">
		<div class="col-sm-12">
			@if(Session::has('errors'))
			@foreach ($errors->all() as $error) 
			<div class="alert alert-danger">				
				<button type="button" class="close" data-dismiss =
				"alert" aria-hidden="true" > &times; </button>
				<strong> {{ $error }}</strong>
			</div>
			@endforeach 

			@endif
		</div>		
	</div>
</div>













@stop