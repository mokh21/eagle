{!! Form::model($prds, ['method' => 'PATCH', 'action' => ['ProductController@update', $prds->id]]) !!}
	<ul>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('localisation', 'Localisation:') !!}
			{!! Form::text('localisation') !!}
		</li>
		<li>
			{!! Form::label('nb_etage', 'Nb_etage:') !!}
			{!! Form::text('nb_etage') !!}
		</li>
		<li>
			{!! Form::label('image', 'Image:') !!}
			{!! Form::file('image') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}