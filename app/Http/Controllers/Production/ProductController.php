<?php

namespace App\Http\Controllers\Production;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return  response()->view('production.crud.product', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            if (
                empty($request->code) ||
                empty($request->designation) ||
                empty($request->id_category)
            ) {
                Toastr::error('Message', 'Veuillez remplir tous les champs obligatoires');
                return redirect()->back();
            }

            $product = new Product();
            $product->code = $request->code;
            $product->designation = $request->designation;
            $product->id_category = $request->id_category;
            $product->save();

            Toastr::success('Message', 'Produit ajouté avec succès');
            return redirect()->back();

        }catch (\Exception $e) {
            Toastr::error('Message', 'Une Erreur c\'est produite');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $check = Product::where('id', $id)->first();
            if($check){
                return response()->json($check);
            }else{
                return response()->json('off');
            }
        }catch(\Exception $e){
            return response()->json('off');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            if (
                empty($request->code) ||
                empty($request->designation) ||
                empty($request->id_category)
            ) {
                Toastr::error('Message', 'Veuillez remplir tous les champs obligatoires');
                return redirect()->back();
            }


            $product = Product::where('id', $id)->first();
            $product->code = $request->code;
            $product->designation = $request->designation;
            $product->id_category = $request->id_category;
            $product->save();

            Toastr::success('Message', "Le produit a bien ete modifie");
            return redirect()->back();

        } catch (\Exception $e) {
            Toastr::error('Message',"Une Erreur c'est produite");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = Product::where('id', $id)->first();
            if ($product) {
                $product->delete();
                return response()->json('ok');
            } else {
                return response()->json('off');
            }
        } catch (\Exception $e) {
            return response()->json('off');
        }
    }
}
