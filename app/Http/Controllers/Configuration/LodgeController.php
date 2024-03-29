<?php

namespace App\Http\Controllers\Configuration;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Lodge;
use Illuminate\Http\Request;

class LodgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lodges = Lodge::all();
        $buildings = Building::all();
        return view('configuration/crud/lodge', compact('lodges','buildings'));
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
                empty($request->name) ||
                empty($request->maximum_number) ||
                empty($request->id_building)

            ) {
                toastr()->error('Message', 'Veuillez remplir tous les champs obligatoires');
                return redirect()->back();
            }

            $lodge = new Lodge();
            $lodge->name = $request->name;
            $lodge->maximum_number = $request->maximum_number;
            $lodge->position_description = $request->position_description ? $request->position_description : ' ';
            $lodge->id_building = $request->id_building;
            $lodge->save();
            toastr()->success('La loge a bien ete ajoute');
            return redirect()->back();

        }catch (\Exception $e) {
            // dd($e->getMessage());
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
            $check = Lodge::where('id', $id)->first();
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
                empty($request->input('name')) ||
                empty($request->input('maximum_number')) ||
                empty($request->input('id_building'))
            ) {
                toastr()->error('Message', 'Veuillez remplir tous les champs obligatoires');
                return redirect()->back();
            }


            $lodge = Lodge::where('id', $id)->first();
            if($lodge){
                $lodge->name = $request->name;
                $lodge->maximum_number = $request->maximum_number;
                $lodge->position_description = $request->position_description ? $request->position_description : ' ';
                $lodge->id_building = $request->id_building;
                $lodge->save();
            }
            // dd(1);

            toastr()->success('Message', "Le produit a bien ete modifie");
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
            $lodge = Lodge::where('id', $id)->first();
            if ($lodge) {
                $lodge->delete();
                return response()->json('ok');
            } else {
                return response()->json('off');
            }
        } catch (\Exception $e) {
            return response()->json('off');
        }
    }
}

