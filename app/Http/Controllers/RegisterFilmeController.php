<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Filme;

class RegisterFilmeController extends Controller
{
    public function showForm()
    {
        return view('pages.registerFilme');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required',
            'description' => 'required'
        ]);

        $data = $request->only('name', 'value', 'description');

        $filme = Filme::create($data);

        return redirect()->route('home');
    }
}