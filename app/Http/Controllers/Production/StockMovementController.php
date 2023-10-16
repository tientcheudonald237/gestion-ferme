<?php

namespace App\Http\Controllers\Production;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\StockMovement;
use App\Services\StockService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class StockMovementController extends Controller
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
            

            $stock_service = new StockService();

            if($request->type === 'entry'){
                $stock_service->enter_from_stock($request);

                if (
                    empty($request->id_product) ||
                    empty($request->quantity) ||
                    empty($request->type) ||
                    empty($request->unit_acquisition_price) ||
                    empty($request->bill_number)
                ) {
                    toastr()->error('Message', 'Veuillez remplir tous les champs obligatoires');
                    return redirect()->back();
                }

            }else{
                if (
                    empty($request->id_product) ||
                    empty($request->quantity) ||
                    empty($request->type) 
                ) {
                    toastr()->error('Message', 'Veuillez remplir tous les champs obligatoires');
                    return redirect()->back();
                }
                
                $stock_service->out_of_stock($request);
            }

            toastr()->success('Message', 'Le Nouveau stock a ete ajoute avec succès');
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
            $check = StockMovement::where('id', $id)->first();
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
        try {
            $stock_movement = StockMovement::where('id', $id)->first();
            if ($stock_movement) {
                $stock_movement->delete();
                return response()->json('ok');
            } else {
                return response()->json('off');
            }
        } catch (\Exception $e) {
            return response()->json('off');
        }
    }
}
