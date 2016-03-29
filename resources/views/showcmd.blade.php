@foreach($cmds as $c)
<ul>ID : {{ $c->id }}</ul>
<li>ID Du Client : {{ $c->id_client }}</li>
<li>code_type : {{ $c->code_type }}</li>
<li>Dossier: {{ $c->dossier }}</li>


{{ Form::open(['method' => 'GET' , 'action' => ['CommandesController@edit' , $c->id]]) }}
<input type="submit" value="modifier">
{{ Form::close() }}

{{ Form::open(['method' => 'DELETE' , 'action' => ['CommandesController@destroy' , $c->id]]) }}
<input type="submit" value="effacer">
{{ Form::close() }}
@endforeach
