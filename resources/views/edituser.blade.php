{!! Form::model($utilisateur, ['method' => 'PATCH', 'action' => ['UserController@update', $utilisateur->id]]) !!}

<html> Nom </html>
{!! Form::text('name'); !!}
<html> <br><br> </html>

<html> Email </html>
{!! Form::email('email'); !!}
<html> <br><br> </html>

<html> Type </html>
{!!  Form::text('type'); !!}
<html> <br><br> </html>

<html>Nouveau Mot De Passe :</html>
{{ Form::password('password', array('placeholder'=>'new password', 'required'=>'required')) }}
<html> <br><br> </html>

<html>Confirmation Du Nouveau Mot De Passe :</html>
{{ Form::password('password_confirmation', array('placeholder'=>'new password confirmation', 'required'=>'required')) }}
<html> <br><br> </html>

 
{!! Form::submit('modifier'); !!}


{!! Form::close() !!}
@if ($errors->any())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach
</ul>
@endif
