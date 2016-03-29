{!! Form::open(array('url' => 'mail')) !!}

	<ul>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('sujet', 'Sujet:') !!}
			{!! Form::text('sujet') !!}
		</li>
		<li>
			{!! Form::label('contenu', 'Contenu:') !!}
			{!! Form::textarea('contenu') !!}
		</li>
		
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}