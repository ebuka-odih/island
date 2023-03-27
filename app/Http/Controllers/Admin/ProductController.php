<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function create()
    {
        return view('admin.add');
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        $data['shipment_number'] = $this->trackingNo();
        Product::create($data);
        return redirect()->route('admin.product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'unit' => 'required',
            'quantity' => 'required',
            'amount' => 'required',
            'rec_name' => 'required',
            'rec_email' => 'required',
            'rec_phone' => 'required',
            'rec_address' => 'required',
        ];
        return $request->validate($rules);
    }


}
