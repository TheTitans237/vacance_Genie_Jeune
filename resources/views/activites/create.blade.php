@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'activites.store']) !!}

		<div class="mb-3">
			{{ Form::label('libelle', 'Libelle', ['class'=>'form-label']) }}
			{{ Form::text('libelle', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('description', 'Description', ['class'=>'form-label']) }}
			{{ Form::textarea('description', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('imgUrl', 'ImgUrl', ['class'=>'form-label']) }}
			{{ Form::text('imgUrl', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('annee', 'Annee', ['class'=>'form-label']) }}
			{{ Form::string('annee', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('', '', ['class'=>'form-label']) }}
			{{ Form::text('', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@stop