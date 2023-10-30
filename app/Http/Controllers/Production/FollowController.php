<?php

namespace App\Http\Controllers\Production;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            // dd($request);
            if (
                empty($request->designation) ||
                empty($request->weight) ||
                empty($request->sex) ||
                empty($request->id_lodge) 
            ) {
                toastr()->error('Message', 'Veuillez remplir tous les champs obligatoires');
                return redirect()->back();
            }

            $existingAnimal = Follow::where('designation', $request->designation)->first();
            if ($existingAnimal) {
                toastr()->error('Message', 'La désignation doit être unique');
                return redirect()->back();
            }

            $animal = new Follow();
            $animal->designation = $request->designation;
            $animal->weight = $request->weight;
            $animal->sex = $request->sex;
            $animal->id_lodge = $request->id_lodge;

            if ($request->is_to_buy == 1) {
                if (empty($request->buying_price)) {
                    toastr()->error('Message', 'Veuillez spécifier le prix d\'achat');
                    return redirect()->back();
                }

                $animal->is_to_buy = '1';
                $animal->buying_price = $request->buying_price;
            } else {
                if (empty($request->id_parent)) {
                    toastr()->error('Message', 'Veuillez spécifier le parent');
                    return redirect()->back();
                }

                $animal->is_to_buy = '0';
                $animal->id_parent = $request->id_parent;
            }

            $animal->save();
            toastr()->success('L\'animal a bien été ajouté');
            return redirect()->back();

        } catch (\Exception $e) {
            dd($e->getMessage());
            toastr()->error('Message', 'Une erreur s\'est produite');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
