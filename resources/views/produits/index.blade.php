<h1 align="center"> Liste Des Produits </h1>


@foreach($produit as $p)
<li>ID : {{ $p->id }}</li>
<p>prix : {{ $p->prix }}</p>
<p>surface : {{ $p->surface }}</p>
<p>type : {{ $p->type }}</p>
<p>localité : {{ $p->localite }}</p>
<p>description : {{ $p->description }}</p>
<p>code_p : {{ $p->code_p }}</p>
<p>image : {{ $p->image }}</p>
<p>visite virtuelle : {{ $p->visite_virtuelle }}</p>
<p>Résidence : {{ $p->residence }}</p>

<img src='/images/{{ $p->image }}'>

<img src="{{ $p->image }}" />


{{ Form::open(['method' => 'GET' , 'action' => ['ProduitsController@show' , $p->id]]) }}
<input type="submit" value="afficher">
{{ Form::close() }}

{{ Form::open(['method' => 'GET' , 'action' => ['ProduitsController@edit' , $p->id]]) }}
<input type="submit" value="modifier">
{{ Form::close() }}

{{ Form::open(['method' => 'DELETE' , 'action' => ['ProduitsController@destroy' , $p->id]]) }}
<input type="submit" value="effacer">
{{ Form::close() }}
@endforeach

