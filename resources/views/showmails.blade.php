@foreach($mails as $m)
<ul> ID : {{$m->id}} </ul>
<li>Envoyé le : {{ $m->date_mail }} à : {{ $m->heure_mail }} </li>
<li>Envoyé Par : {{ $m->nom }}</li>
<li>Sujet : {{ $m->sujet }}</li>
<li>Contenu : {{ $m->contenu }}</li>
</ul>
@endforeach