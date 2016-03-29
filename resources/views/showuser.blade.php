@foreach($utilisateur as $u)
<li> id : {{ $u->id }} </li>
<p>nom : {{ $u->name }}</p>
<p>email : {{ $u->email }}</p>
<p>type : {{ $u->type }}</p>
{{ Form::open(['method' => 'GET' , 'action' => ['UserController@show' , $u->id]]) }}
<input type="submit" value="afficher">
{{ Form::close() }}

{{ Form::open(['method' => 'GET' , 'action' => ['UserController@edit' , $u->id]]) }}
<input type="submit" value="modifier">
{{ Form::close() }}

{{ Form::open(['method' => 'GET' , 'action' => ['UserController@destroy' , $u->id]]) }}
<input type="submit" value="supprimer">
{{ Form::close() }}


@endforeach


