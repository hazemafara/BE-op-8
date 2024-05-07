<?php

namespace App\Http\Controllers;
use App\Models\Warehouse;
use App\Models\Allergie;
use App\Models\Supplier;


use Illuminate\Http\Request;

class allergyController extends Controller
{
    
    public function index(){
        $results = Warehouse::select('warehouses.id', 'products.name as product_name', 'allergies.name as allergen_name', 'allergies.description as allergen_description', 'warehouses.quantity_on_hand')
        ->join('products', 'warehouses.product_id', '=', 'products.id')
        ->join('product_per_allergies', 'products.id', '=', 'product_per_allergies.product_id')
        ->join('allergies', 'product_per_allergies.allergen_id', '=', 'allergies.id')
        ->orderBy('allergies.name', 'asc')
        ->get();

            $allegrns = Allergie::all();
        return view('allergies', ['results' => $results, 'allegrns' => $allegrns]);
    }
     public function getProductByAllergy(Request $request){
        $allergenId = $request->input('allergen');

        $results = Warehouse::select('warehouses.id','products.name as product_name', 'allergies.name as allergen_name', 'allergies.description as allergen_description', 'warehouses.quantity_on_hand')
            ->join('products', 'warehouses.product_id', '=', 'products.id')
            ->join('product_per_allergies', 'products.id', '=', 'product_per_allergies.product_id')
            ->join('allergies', 'product_per_allergies.allergen_id', '=', 'allergies.id')
            ->where('allergies.id', $allergenId)
            ->orderBy('allergies.name', 'asc')
            ->get();

            $allegrns = Allergie::all();
        return view('allergy', ['results' => $results, 'allegrns' => $allegrns, 'request' => $request]);
}

public function getSupplierByProduct($productId){
        // $productId = [your_product_id]; // replace with your actual product id

        $results = Supplier::select('suppliers.name AS naam', 'suppliers.contact_person AS contact_persoon', 'suppliers.mobile', 'contacts.city', 'contacts.street', 'contacts.house_number')
        ->join('contacts', 'suppliers.contact_id', '=', 'contacts.id')
        ->join('product_per_suppliers', 'suppliers.id', '=', 'product_per_suppliers.supplier_id')
        ->where('product_per_suppliers.product_id', $productId)
        ->get();
        return view("leverancier",['results' => $results]);
}
}
