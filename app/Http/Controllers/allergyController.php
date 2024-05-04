<?php

namespace App\Http\Controllers;
use App\Models\Warehouse;
use App\Models\Allergie;


use Illuminate\Http\Request;

class allergyController extends Controller
{
    
    public function index(){
        $results = Warehouse::select('products.name as product_name', 'allergies.name as allergen_name', 'allergies.description as allergen_description', 'warehouses.quantity_on_hand')
            ->join('products', 'warehouses.product_id', '=', 'products.id')
            ->join('product_per_allergies', 'products.id', '=', 'product_per_allergies.product_id')
            ->join('allergies', 'product_per_allergies.allergen_id', '=', 'allergies.id')
            ->orderBy('allergies.name', 'asc')
            ->get();

            $allegrns = Allergie::all();
        return view('allergies', ['results' => $results, 'allegrns' => $allegrns]);
    }
    // public function search(Request $request){
}
