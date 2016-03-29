<?php 
namespace App\Http\Controllers;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\CreateRdvRequest;
use Carbon\Carbon;

class ProductController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
   $prds = Product::all();

   return view('showprds', ['prds' => $prds]); 
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('product');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    Product::create($request->all());
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
    $prds = Product::findOrfail($id);

    return view('showprd', ['prds' => $prds]); 
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $prds = Product::findOrfail($id);
  return view('updateprd', ['prds' => $prds]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
     $prds = Product::findOrfail($id);
  $prds->update($request->all());
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
    $product = Product::findOrfail($id);
$product->delete();
return("Suppression Avec Succés");
  }


  
}

?>