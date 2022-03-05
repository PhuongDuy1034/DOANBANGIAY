<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    protected $table = "products";
    protected $model;
    function __construct()
    {
        $this->model = new Product();
    }
    function danhsach()
    {
        $data =DB::table('products')->get();
        return view('layouts.user.newproduct',[
            'data'=>$data
        ]);
    }
}
