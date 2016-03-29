<?php 
namespace App\Http\Controllers;
use App\Rdv;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\CreateRdvRequest;


class RdvController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $rdvs = Rdv::all();

        return view('showrdv', ['rdvs' => $rdvs]);

    /*$rdvs = Rdv::paginate(2);

        return view('showrdv', ['produit' => $rdvs]); 
        */
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  { 
    $rdv = Rdv::all();
    return view('rdv', ['rdv' => $rdv]);

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(CreateRdvRequest $request)
  {
    Rdv::create($request->all());
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
   $rdvs = Rdv::findOrfail($id);

        return view('showsrdv', ['rdvs' => $rdvs]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
$rdvs = Rdv::findOrfail($id);
  return view('updaterdv', ['rdvs' => $rdvs]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
 
  $rdvs = Rdv::findOrfail($id);
  $rdvs->update($request->all());
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
  $rdvs = Rdv::findOrfail($id);
$rdvs->delete();
return("Suppression Avec Succés");  
  }
  
  public function showdaterdv()
  {
    $date = Rdv::all();
    return view('showdaterdv', ['date' => $date]);
  }


}

