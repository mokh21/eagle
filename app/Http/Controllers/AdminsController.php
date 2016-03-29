<?php
namespace App\Http\Controllers;
use App\Admins;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\CreateAdminsRequest;

class AdminsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $adms = Admins::all();

        return view('showadm', ['adms' => $adms]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

    return view('admins');

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(CreateAdminsRequest $request)
  {
    //Admins::create($request->all());
    
    $user = new Admins;

        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->num_tel = $request->num_tel;
        $user->adresse = $request->adresse;
        $user->save();
       

 return ("Insertion Avec Succés");
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
      $adms = Admins::findOrfail($id);

        return view('showsadm', ['adms' => $adms]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $adms = Admins::findOrfail($id);
  return view('updateadm', ['adms' => $adms]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
    $adms = Admins::findOrfail($id);
  $adms->update($request->all());
  return ('succées');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $adms = Admins::findOrfail($id);
$adms->delete();
return("Suppression Avec Succés");
  }
  
}

?>