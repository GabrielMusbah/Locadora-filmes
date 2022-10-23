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

class SelectFilmeController extends Controller
{
    public function show()
    {

        $itens = Filme::all();

        return view('pages.selectFilme', compact('itens'));
    } 

    public function select($filme)
    {
        $data['cliente_id'] = Auth::user()->id;
        $data['filme_id'] = $filme;

        filme_alugados::create($data);

        return redirect()->route('home');

    }


}
