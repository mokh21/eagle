@foreach($res as $r)
<li>ID Du Résidence : {{ $r->id }}</li>
<ul>
<li>nom : {{ $r->nom }}</li>
<li>adresse : {{ $r->adresse }}</li>
<li>Nombre D'Etage : {{ $r->nb_etage }}</li>
<li>Visite Virtuelle : {{ $r->visite_virtuelle }}</li>
<li>Nombre D'appartements : {{ $r->nb_app }}</li>
</ul>
{{ Form::open(['method' => 'GET' , 'action' => ['ResidenceController@show' , $r->id]]) }}
<input type="submit" value="afficher">
{{ Form::close() }}

{{ Form::open(['method' => 'GET' , 'action' => ['ResidenceController@edit' , $r->id]]) }}
<input type="submit" value="modifier">
{{ Form::close() }}

{{ Form::open(['method' => 'DELETE' , 'action' => ['ResidenceController@destroy' , $r->id]]) }}
<input type="submit" value="effacer">
{{ Form::close() }}
@endforeach