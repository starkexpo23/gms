@extends('layouts.master')
@section('sidebar')
<div class="sidebar">
  <a href="/">Home</a>
  <a href="/subjects">Subjects</a>
  <a href="/strands">Strands</a>
  <a href="/teachers">Teachers</a>
  <a class="active" href="/sections">Sections</a>
  <a href="/subjectstrands">Subject Strands</a>
</div>
@endsection
@section('content')
	<div class="container">
		<table class="table">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Active</th>
				</tr>
			<tbody>
				@foreach($sections as $section)
					<tr>
						<td>{{ $section->id }}</td>
						<td>{{ $section->name }}</td>
						<td>{{ $section->active }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/sections/add'>Add Section</a>
	</br>
@endsection