<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
class ProductController extends Controller
{
    //Mock api
    private $apiUrl = "https://656ca88ee1e03bfd572e9c16.mockapi.io/products";
    public function index()
    {
        $response = Http::get($this->apiUrl);

        if ($response->successful()) {
            $products = $response->json();
            return view('products.index', compact('products'));
        } else {
            return back()->withErrors(['message' => 'Không thể lấy dữ liệu từ Mock API']);
        }
    }

    // Lấy data product bằng eloquent
    public function productEloquent(){
        $products = Product::all(); 
        return view('products.productEloquent', compact('products'));
    }
}
