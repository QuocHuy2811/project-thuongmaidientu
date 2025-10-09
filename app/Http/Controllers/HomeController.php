<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SanPham;

class HomeController extends Controller
{
    public function test_sp()
    {
        // Lấy 6 sản phẩm đầu tiên
        $products = SanPham::take(6)->get();

        return view('home', ['products' => $products]);
    }
}