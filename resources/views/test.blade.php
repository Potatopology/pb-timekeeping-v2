@extends('cms.templates.master')

@include('cms.templates.header')

@section('body')

	<div class="container-fluid">

		<div class="row text-center">
			<h1>Welcome {{ Auth::user()->name }}!</h1>
			<button type="button" class="btn btn-primary">In</button>
			<button type="button" class="btn btn-danger">Out</button>
		</div>

		<div class="row text-center">
			<table class="table">
				<thead>
					<tr>
						<th>Date</th>
						<th>Time In</th>
						<th>Remarks</th>
						<th>Time Out</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
					</tr>
				</tbody>
			</table>
		</div>



	</div>

@endsection
