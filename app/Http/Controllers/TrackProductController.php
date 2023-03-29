<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class TrackProductController extends Controller
{

    public function trackShipment(Request $request)
    {
        $product = Product::where('shipment_number', $request->shipment_number)->first();
        if ($product) {
            return view('pages.shipment-details', compact('product'));
        }
        return redirect()->back()->with('declined', "Please Enter A Correct Product Code");
    }

}
