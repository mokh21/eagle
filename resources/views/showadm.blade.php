@foreach($adms as $a)
<li>ID : {{ $a->id }}</li>
<ul>
<li>Nom : {{ $a->nom }}</li>
<li>email : {{ $a->email }}</li>
<li>Numéro De l'admin : {{ $a->num_tel }}</li>
<li>Adresse De l'admin : {{ $a->adresse }}</li>
</ul>
{{ Form::open(['method' => 'GET' , 'action' => ['AdminsController@show' , $a->id]]) }}
<input type="submit" value="afficher">
{{ Form::close() }}

{{ Form::open(['method' => 'GET' , 'action' => ['AdminsController@edit' , $a->id]]) }}
<input type="submit" value="modifier">
{{ Form::close() }}

{{ Form::open(['method' => 'DELETE' , 'action' => ['AdminsController@destroy' , $a->id]]) }}
<input type="submit" value="effacer">
{{ Form::close() }}
@endforeach