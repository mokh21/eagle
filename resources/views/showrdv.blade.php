<h1 align="center"> Liste Des Rendez-Vous </h1>


 
@foreach($rdvs as $r)
<li>ID Du Client : {{ $r->id_client }}</li>
<ul>
<li>client : {{ $r->nom_client }}</li>
<li>email : {{ $r->email_client }}</li>
<li>Numéro Du Client : {{ $r->num_client }}</li>
<li>Date Du Rendez_Vous : {{ $r->date_rdv }}</li>
<li>Heure Du Rendez_Vous : {{ $r->description }}</li>
</ul>
{{ Form::open(['method' => 'GET' , 'action' => ['RdvController@show' , $r->id]]) }}
<input type="submit" value="afficher">
{{ Form::close() }}

{{ Form::open(['method' => 'GET' , 'action' => ['RdvController@edit' , $r->id]]) }}
<input type="submit" value="modifier">
{{ Form::close() }}

{{ Form::open(['method' => 'DELETE' , 'action' => ['RdvController@destroy' , $r->id]]) }}
<input type="submit" value="effacer">
{{ Form::close() }}
@endforeach

