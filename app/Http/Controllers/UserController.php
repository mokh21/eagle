<?php

namespace App\Http\Controllers;
    use ResetsPasswords;

use DB;
use Hash;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Pagination\LengthAwarePaginator;


class UserController extends Controller
{
	public function index()
    {
        $user = User::all();

        return view('showuser', ['utilisateur' => $user]);
    }

    public function show($id)

       {
       $user = User::find($id);
    return view('showut', ['utilisateur' => $user]);
       }

    function destroy($id)

{

$utilisateur = User::findOrfail($id);
$utilisateur->delete();
return("Suppression Avec Succés");
}


public function edit($id)
{
	$user = User::findOrfail($id);
	return view('edituser', ['utilisateur' => $user]);
}

public function update($id, CreateUtilisateursRequest $request)
{    

$user = User::findOrfail($id);
  
  $user->update(['name' => $request->name]);
  $user->update(['type' => $request->type]);
  $user->update(['email' => $request->email]);
  $user->update(['password' => bcrypt($request->password)]);
  return ('succées');

/*$user = User::findOrfail($id);

	$user->update($request->all());
	return ('succées');*/
}


function create()
    {
 return view('AjoutCl');
  //return ("Insertion Avec Succés");
      }


//Ajout/Inscription Des Clients
 protected function store(CreateUserRequest $request)
{
    
$user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->role='Client';
        $user->password = bcrypt($request->password);
        $user->save();
        $mail=$request->email;
        $name=$request->name;
        /*Mail::send('mailwelcome', ['Name' => 'aigles'], function($message)
        {
          $message->to('johuragiga@walkmail.ru', 'mokhtar')->from('lesaiglesarabes@gmail.com')->subject('welcome');
        });
*/
}
}
