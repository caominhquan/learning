@extends('layout')

@section('content')
	
	<form action="/destroy/{{ $employees->id }}" method="POST" >
	    {{ csrf_field() }}
	    {{ method_field('POST') }}  
	    <div class="row">
	    	<input type="hidden" name="id" value="{{ $employees->id }}">
	        <div class="col-md-12">
	        	<h3>Ban co chac chan muon xoa?</h3>
	        </div>
	        <div class="col-md-12">
	            <button class="btn btn-primary btn-lg">delete</button>
	        </div>
	    </div>
	    
	</form>
@endsection