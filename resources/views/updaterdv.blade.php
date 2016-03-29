{!! Form::model($rdvs, ['method' => 'PATCH', 'action' => ['RdvController@update', $rdvs->id]]) !!}
<ul>
		<li>
			{!! Form::label('id_client', 'Id_client:') !!}
			{!! Form::text('id_client') !!}
		</li>
		<br>
		<li>
			{!! Form::label('nom_client', 'Nom_client:') !!}
			{!! Form::text('nom_client') !!}
		</li>
		<br>
		<li>
			{!! Form::label('email_client', 'Email_client:') !!}
			{!! Form::email('email_client') !!}
		</li>
		<br>
		<li>
			{!! Form::label('num_client', 'Num_client:') !!}
			{!! Form::text('num_client') !!}
		</li>
		<br>
		<li>
			{!! Form::label('date_rdv', 'Date_rdv:') !!}
			{!! Form::text('date_rdv') !!} 
		</li>
		<br>
		<li>
			{!! Form::label('heure_rdv', 'Heure_rdv:') !!}
			{!! Form::text('heure_rdv') !!}
		</li>
		<br>
		</ul>
	{!! Form::submit('modifier'); !!}


{!! Form::close() !!}
@if ($errors->any())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach
</ul>
@endif
