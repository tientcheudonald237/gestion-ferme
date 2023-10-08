<?php

namespace App\Http\Controllers\Production;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        $categories = Category::all();
        return  response()->view('production.crud.food', compact('foods', 'categories'));
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

            $food = new Food();
            $food->code = $request->code;
            $food->designation = $request->designation;
            $food->id_category = $request->id_category;
            $food->save();

            Toastr::success('Message', 'Étudiant ajouté avec succès');
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
            $check = Food::where('id', $id)->first();
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


            $food = Food::where('id', $id)->first();
            $food->code = $request->code;
            $food->designation = $request->designation;
            $food->id_category = $request->id_category;
            $food->save();

            Toastr::success('Message', "La classe a bien ete modifie");
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
            $food = Food::where('id', $id)->first();
            if ($food) {
                $food->delete();
                return response()->json('ok');
            } else {
                return response()->json('off');
            }
        } catch (\Exception $e) {
            return response()->json('off');
        }
    }
}
