<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    public function index()
{
return view('admin.dashboard.index');
}
public function showLoginForm()
{
return view('admin.auth.login');
}
public function login(Request $request)
{
$this->validate($request, [
'email' => 'required|email',
'password' => 'required|min:6'
]);
if (Auth::guard('admin')->attempt([
'email' => $request->email,
'password' => $request->password
], $request->get('remember'))) {
    return redirect()->intended(route('admin.dashboard'));
}
return back()->withInput($request->only('email', 'remember'));
}

}

