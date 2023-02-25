@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('activites.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>libelle</th>
				<th>description</th>
				<th>imgUrl</th>
				<th>annee</th>
				<th></th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($activites as $activite)

				<tr>
					<td>{{ $activite->id }}</td>
					<td>{{ $activite->libelle }}</td>
					<td>{{ $activite->description }}</td>
					<td>{{ $activite->imgUrl }}</td>
					<td>{{ $activite->annee }}</td>
					<td>{{ $activite-> }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('activites.show', [$activite->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('activites.edit', [$activite->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['activites.destroy', $activite->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
