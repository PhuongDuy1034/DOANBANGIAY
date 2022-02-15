<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productType=ProductType::latest()->paginate(100);;
        return view('admin.ProductType.index',compact('productType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ProductType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(1);
        $request->validate([
            'name'=>'required'
        ]);
        $input = $request->all();
        ProductType::create($input);
        return redirect()->route('admin.productType.index')->with('flash_message', 'ProductType Addedd!');
    }
    public function show($id)
    {
        $pt = ProductType::find($id);
        return view('admin.ProductType.show')->with([
            'pt'=>$pt,
            'id'=>$id
        ]);
    }

    // 
    public function edit( $id)
    {
        $contact = ProductType::find($id);
        return view('admin.ProductType.edit')->with([
            'contact'=>$contact,
            'id'=>$id
        ]);
    }

    
    public function update(Request $request, $id)
    {
        
        $contact = ProductType::find($id);
        $input = $request->all();
        // return $input;
        $contact->update($input);
        return redirect()->route('admin.productType.index')->with('flash_message', 'ProductType Updated!');
    }

    public function destroy( $id)
    {
        $kq = ProductType::find($id)->delete();
        return redirect()->route('admin.productType.index')->with('flash_message', 'ProductType deleted!');
    }
}
