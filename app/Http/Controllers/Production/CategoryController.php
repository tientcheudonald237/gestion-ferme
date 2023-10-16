<?php

namespace App\Http\Controllers\Production;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return response()->view('production.crud.category', compact('categories'));
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
                empty($request->designation)
            ) {
            dd($request);
                toastr()->error('Message', 'Veuillez remplir tous les champs obligatoires');
                return redirect()->back();
            }

            $category = new Category();
            $category->code = $request->code;
            $category->designation = $request->designation;
            $category->save();

            toastr()->success('Message', 'Étudiant ajouté avec succès');
            return redirect()->back();

        }catch (\Exception $e) {
            toastr()->error('Message', 'Une Erreur c\'est produite');
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
            $check = Category::where('id', $id)->first();
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
                empty($request->designation) 
            ) {
                toastr()->error('Message', 'Veuillez remplir tous les champs obligatoires');
                return redirect()->back();
            }


            $category = Category::where('id', $id)->first();
            $category->code = $request->code;
            $category->designation = $request->designation;
            $category->save();

            toastr()->success('Message', "La classe a bien ete modifie");
            return redirect()->back();

        } catch (\Exception $e) {
            toastr()->error('Message',"Une Erreur c'est produite");
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
            $category = Category::where('id', $id)->first();
            if ($category) {
                $category->delete();
                return response()->json('ok');
            } else {
                return response()->json('off');
            }
        } catch (\Exception $e) {
            return response()->json('off');
        }
    }
}
