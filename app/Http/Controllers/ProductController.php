<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function getIndex(Request $request) {
        $sort = $request->input('sort', 'default');

        switch ($sort) {
            case 'price_asc':
                $products = Product::orderBy('price', 'asc')->get();
                break;
            case 'price_desc':
                $products = Product::orderBy('price', 'desc')->get();
                break;
            case 'date':
                $products = Product::orderBy('created_at', 'desc')->get();
                break;
            default:
                $products = Product::all();
                break;
        }
        return view('shop.index', ['products' => $products]);
    }

    public function productView($id){
        $product = Product::findOrFail($id);
        return view('shop.product_view', ['product' => $product]);
    }

    public function getAdminIndex() {
        $products = Product::all();
        return view('shop.admin_index', ['products' => $products]);
    }
    public function AdminProductView($id){
        $product = Product::findOrFail($id);
        return view('shop.admin_product_view', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        // Валідація даних форми
        $validatedData = $request->validate([
            'new_imagePath' => 'required|string',
            'new_title' => 'required|string',
            'new_description' => 'required|string',
            'new_price' => 'required|numeric',
        ]);

        // Оновлення даних в базі даних
        $product->update([
            'imagePath' => $validatedData['new_imagePath'],
            'title' => $validatedData['new_title'],
            'description' => $validatedData['new_description'],
            'price' => $validatedData['new_price'],
        ]);
        
        $products = Product::all();
        return view('shop.admin_index', ['products' => $products]);
    }

}
