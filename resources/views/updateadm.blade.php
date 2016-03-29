{!! Form::model($adms, ['method' => 'PATCH', 'action' => ['AdminsController@update', $adms->id]]) !!}
<ul>
	    <li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password') !!}
		</li>
		<li>
			{!! Form::label('num_tel', 'Num_tel:') !!}
			{!! Form::text('num_tel') !!}
		</li>
		<li>
			{!! Form::label('adresse', 'Adresse:') !!}
			{!! Form::text('adresse') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
	{!! Form::close() !!}
@if ($errors->any())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach
</ul>
@endif
