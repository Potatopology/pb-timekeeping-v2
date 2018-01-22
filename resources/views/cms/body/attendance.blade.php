@extends('cms.templates.master')
@section('body')

	@include('cms.templates.header')

	<div class="container">

		<div class="jumbotron">
			{{-- {{dd(Auth::user()->name)}} --}}

			<h1>Welcome {{ Auth::user()->name }}!</h1>
    		{{-- <h1 class="text-center">{{ \Carbon\Carbon::now()->format('g:ia') }}</h1>     --}}
    		<hr/>

			<div class="row">
				<div class="col-sm-4">
					<a href="{{ url('/test') }}" class="btn btn-success btn-block btn-lg action-btn">
						<i class="fa fa-calendar-check-o fa-fw" aria-hidden="true"></i> Time In
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#" class="btn btn-info btn-block btn-lg action-btn">
						<i class="fa fa-briefcase fa-fw" aria-hidden="true"></i> Official Business
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#" class="btn btn-warning btn-block btn-lg action-btn">
						<i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Logout
					</a>
				</div>
			</div>
		</div>


	</div>


@endsection
