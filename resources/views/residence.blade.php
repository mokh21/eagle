{!! Form::open(array('url' => 'residence')) !!}
	<ul>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('adresse', 'Adresse:') !!}
			{!! Form::text('adresse') !!}
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
			{!! Form::label('visite_virtuelle', 'Visite_virtuelle:') !!}
			{!! Form::text('visite_virtuelle') !!}
		</li>
		<li>
			{!! Form::label('nb_app', 'Nb_app:') !!}
			{!! Form::text('nb_app') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}