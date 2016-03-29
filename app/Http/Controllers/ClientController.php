<?php


namespace App\Http\Controllers;
use Mail;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\Http\Requests\CreateUtilisateursRequest;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\CreateClientRequest;

class ClientController extends Controller
{
    

    function create()
    {
 return view('AjoutCl');
	//return ("Insertion Avec Succés");
    }


    protected function store(CreateClientRequest $request)
{
    
$user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type='Client';
        $user->password = bcrypt($request->password);
        $user->save();
        $mail=$request->email;
        $name=$request->name;
        /*Mail::send('mailwelcome', ['Name' => 'aigles'], function($message)
        {
        	$message->to('johuragiga@walkmail.ru', 'mokhtar')->from('lesaiglesarabes@gmail.com')->subject('welcome');
        });*/

//User::create($request->all());
//return('welcome');
    
}
}
