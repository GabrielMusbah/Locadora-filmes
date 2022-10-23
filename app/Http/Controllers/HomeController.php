<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Filme;
use App\Models\filme_alugados;

class HomeController extends Controller
{
    public function show()
    {
    
        $filmes = Filme::all();

        $filmeAlugados = filme_alugados::all();

        

        

        $id = Auth::user()->id;

        
        return view('pages.home', compact('filmes', 'filmeAlugados', 'id'));
 
    } 

    public function logout(Request $request)
    {
         Auth::logout();
 
         $request->session()->invalidate();
 
         $request->session()->regenerateToken();
 
         return redirect()->route('login');
    }

}
