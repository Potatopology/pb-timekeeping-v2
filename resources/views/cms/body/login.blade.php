@extends('cms.templates.master')
@section('body')

	<div class="container-fluid">
		<div class="container">

			<div class="col-sm-4 col-sm-offset-4 text-center">

				<h1>Login</h1>
				<hr/>
				{{-- <h2>{{ bcrypt('admin') }}</h2> --}}

				{!! Form::open(['url'=>'logger']) !!}
				<div class="login-form">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control input-lg">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control input-lg">
					</div>

					<button class="btn btn-primary btn-block btn-lg">Log in</button>
				</div>
				{!! Form::close() !!}

			</div>

		</div>
	</div>

@endsection
