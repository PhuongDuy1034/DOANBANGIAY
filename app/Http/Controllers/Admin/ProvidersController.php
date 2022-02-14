<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Providers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use NunoMaduro\Collision\Contracts\Provider;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provider=Providers::latest()->paginate(5);;
        return view('admin.Provider.index',compact('provider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.provider.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $input = $request->all();
        Providers::create($input);
        return redirect()->route('admin.provider.index')->with('flash_message', 'ProductType Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Providers  $providers
     * @return \Illuminate\Http\Response
     */
    public function show(Providers $providers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Providers  $providers
     * @return \Illuminate\Http\Response
     */
    public function edit(Providers $providers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Providers  $providers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Providers $providers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Providers  $providers
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $kq = DB::delete('delete from providers where id = ?', [$id]);
        return redirect()->route('admin.provider.index')->with('flash_message', 'Contact deleted!');
    }
}
