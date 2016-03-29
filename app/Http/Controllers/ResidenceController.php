<?php 
namespace App\Http\Controllers;
use App\Residence;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;


class ResidenceController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $res = Residence::all();
    return view('showress', ['res'=> $res]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('residence');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    Residence::create($request->all());
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
    $res = Residence::findOrfail($id);
    return view('showres', ['res'=> $res]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
   $res = Residence::findOrfail($id);
    return view('updateres', ['res'=> $res]); 
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
  $res = Residence::findOrfail($id);
  $res->update($request->all());
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
    $res = Residence::findOrfail($id);
$res->delete();
return("Suppression Avec Succés");
  }
  
}

?>