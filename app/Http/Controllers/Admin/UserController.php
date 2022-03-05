<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::latest()->paginate(5);
        return view ('admin.user.index',compact('user'))
        ->with('i',(request()->input('page',1) - 1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(Request $request)
    // {
        
    //     return view('admin.CRUDAccount.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // $input = $request->all();
    //     // Account::create($input);
    //     // return redirect('account')->with('flash_message', 'Account Addedd!');
    //     $request->validate([
    //         'username'=>'required',
    //         'password'=>'required',
    //         'email'=>'required',
    //         'fullname'=>'required',
    //         'isadmin'=>'required',
    //         'status'=>'required',
    //         'address'=>'required',
    //         'avatar'=>'required',
    //         'phone'=>'required',
            
    //     ]);
    //     $input = $request->all();
    //     Account::create($input);
    //     return redirect()->route('admin.account.index')->with('flash_message', 'Account Addedd!');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     $account = Account::find($id);
    //     return view('admin.CRUDAccount.Show')->with('accounts', $account);
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     // $accounts = Account::find($id);
    //     // return view('admin.CRUDAccount.edit')->with('accounts', $accounts);
    //     $accounts = Account::find($id);
    //     return view('admin.CRUDAccount.edit')->with([
    //         'accounts'=>$accounts,
    //         'id'=>$id
    //     ]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $accounts = Account::find($id);
    //     $input = $request->all();
    //     $accounts->update($input);
    //     return redirect()->route('admin.account.index')->with('flash_message', 'Account Updated!');  
  
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $kq = Account::find($id)->delete();
    //     return redirect()->route('admin.account.index')->with('flash_message', 'Account deleted!');
     
    // }
}
