{!! Form::open(array('url' => 'utilisateurs')) !!}

<html> Nom </html>
{!! Form::text('name'); !!}
<html> <br><br> </html>

<html> Email </html>
{!! Form::email('email'); !!}
<html> <br><br> </html>

<html>Nouveau Mot De Passe :</html>
{{ Form::password('password', array('placeholder'=>'password', 'required'=>'required')) }}
<html> <br><br> </html>

<html>Confirmation Du Nouveau Mot De Passe :</html>
{{ Form::password('password_confirmation', array('placeholder'=>'password confirmation', 'required'=>'required')) }}
<html> <br><br> </html>

{!!  Form::selectMonth('month');




 !!}
 
{!! Form::submit('inscription'); !!}


{!! Form::close() !!}
@if ($errors->any())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach
</ul>
@endif
