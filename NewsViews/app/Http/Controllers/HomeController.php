<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request)
    {
        $user = Account::where('email', $request->input('email'))
            ->where('password', $request->input('password'))
            ->first();

        if ($user) {
            return redirect()->route('news.index');
        }
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    

}
