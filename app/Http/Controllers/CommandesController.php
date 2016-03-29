<?php 
namespace App\Http\Controllers;
use App\Commandes;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\CreateRdvRequest;
use Carbon\Carbon;

class CommandesController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $cmds = Commandes::all();

        return view('showcmd', ['cmds' => $cmds]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('commandes');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    Commandes::create($request->all());
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
   $cmds = Commandes::findOrfail($id);

        return view('showcmd', ['cmds' => $cmds]); 
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
   $cmds = Commandes::findOrfail($id);
  return view('updatecmd', ['cmds' => $cmds]); 
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
      $cmds = Commandes::findOrfail($id);
  $cmds->update($request->all());
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
    $cmds = Commandes::findOrfail($id);
$cmds->delete();
return("Suppression Avec Succés");
  }
  
}

?>