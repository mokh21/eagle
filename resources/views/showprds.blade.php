@foreach($prds as $p)
<ul> ID : {{$p->id}} </ul>
<li>nom : {{ $p->nom }} 
<li>localisation : {{ $p->localisation }}</li>
<li>nombre d'étage : {{ $p->nb_etage }}</li>
<li>Contenu : {{ $p->file }}</li>
</ul>
{{ Form::open(['method' => 'GET' , 'action' => ['ProductController@show' , $p->id]]) }}
<input type="submit" value="afficher">
{{ Form::close() }}

{{ Form::open(['method' => 'GET' , 'action' => ['ProductController@edit' , $p->id]]) }}
<input type="submit" value="modifier">
{{ Form::close() }}

{{ Form::open(['method' => 'DELETE' , 'action' => ['ProductController@destroy' , $p->id]]) }}
<input type="submit" value="effacer">
{{ Form::close() }}

{{ Form::open(['method' => 'GET' , 'action' => ['SproductController@create' , $p->nom ]]) }}
<input type="submit" value="Ajouter Un Sous-Produit">
{{ Form::close() }}
@endforeach