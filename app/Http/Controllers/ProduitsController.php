<?php

namespace App\Http\Controllers;


use DB;
use App\Produits;
use App\Residence;
use App\Http\Requests;
//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;
use Request;
use App\Http\Requests\CreateProduitsRequest;
use View;

class ProduitsController extends Controller
{
    

 function create()
 { 
  


  $n = Residence::all('nom')->toArray();
  return  View('create',compact('n'));
 //return View::make('create')->with('n',$n);
	//return ("Insertion Avec Succés");
    }

    public function store(CreateProduitsRequest $request)
    {
    	 
Produits::create($request->all());
 return ("Insertion Avec Succés");
    }

       public function index()
    {
        $products = Produits::paginate(2);

        return view('produits.index', ['produit' => $products]);
    }

       public function show($id)

       {

       $product = Produits::find($id);
    return view('show', ['produit' => $product]);
       }

      function destroy($id)

{

$product = Produits::findOrfail($id);
$product->delete();
return("Suppression Avec Succés");
}

     /*public function edit($id,Request $request)

     {  
     	$product = Produits::findOrfail($id);
     	return view('update',  ['produit' => $product]);
     	$product ->update($request->all());
     	return ('modifié avec succés');

}*/

public function edit($id)
{
	$product = Produits::findOrfail($id);
	return view('produits.edit', ['produit' => $product]);
}

public function update($id, CreateProduitsRequest $request)
{
  dd($request->all());
	$product = Produits::findOrfail($id);
	$product->update($request->all());
	return ('succées');
}

}

