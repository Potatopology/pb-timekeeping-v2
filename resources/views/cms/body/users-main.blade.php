@extends('cms.templates.master')
@section('body')

	@include('cms.templates.header')

	<h1>USERS</h1>

	<table class="table table-hover table-striped table-bordered table-responsive">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>LVL</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $row)
			<tr>
				<td>{{ $row->id }}</td>
				<td>{{ $row->name }}</td>
				<td>{{ $row->email }}</td>
				<td>{{ $row->lvl }}</td>
				<td>
					<button class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw" aria-hidden="true"></i> </button>
					<button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i></button>
					<button class="btn btn-info btn-xs"><i class="fa fa-search fa-fw" aria-hidden="true"></i></button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
