<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', ['products' => Product::all()]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pro_code' => 'required',
            'pro_name' => 'required',
            'pro_type' => 'required',
            'pro_lbl_type' => 'required',
            'pro_qty_per_box' => 'required|integer',
            'pro_weight' => 'required',
            'pro_weight_unit' => 'required',
            'note' => 'nullable',
        ]);

        $aa = Product::create($data);

        return redirect(route('product.index'));
    }
}
