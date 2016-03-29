{!! Form::model($cmds, ['method' => 'PATCH', 'action' => ['CommandesController@update', $cmds->id]]) !!}
<ul>
		<li>
			{!! Form::label('id_client', 'Id_client:') !!}
			{!! Form::text('id_client') !!}
		</li>
		<li>
			{!! Form::label('code_type', 'Code_type:') !!}
			{!! Form::text('code_type') !!}
		</li>
		<li>
			{!! Form::label('dossier', 'Dossier:') !!}
			{!! Form::text('dossier') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
