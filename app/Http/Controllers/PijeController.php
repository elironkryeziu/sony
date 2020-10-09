<?php

namespace App\Http\Controllers;

use App\Pije;
use Illuminate\Http\Request;

class PijeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pijet = Pije::all();
        
        $data = [
            'pijet' => $pijet
        ];

        return view('pije',$data);
    }
}
