<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Publication;
use App\Models\Gallery;
use Carbon\Carbn;

class WebsiteController extends Controller
{
    public function show()
    {
        
        $user = Auth::user();

        return view('welcome', ['user' => $user]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function loginShow()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        try {

            if(!Auth::attempt($request->only('email', 'password')))
            {
                return back()->with('status', 'Invalid Credentials');
            }

            $user = Auth::user();

            return redirect('/');
            
        } catch (\Throwable $th) {
            

            return back()->with('status', 'An error occured, Please try again!');

        }
    }

    public function publications()
    {
        $user = Auth::user();

        $publications = Publication::orderBy('id', 'desc')->paginate(10);

        return view('publications', ['user' => $user, 'publications' => $publications]);
    }

    public function gallery()
    {
        $user = Auth::user();

        $gallery = Gallery::orderBy('id', 'desc')->paginate(12);

        return view('gallery', ['user' => $user, 'gallery' => $gallery]);
    }

    public function team()
    {
        $user = Auth::user();

        return view('team', ['user' => $user]);
    }
}
