<?php

namespace App\Http\Controllers;

use App\Fatura;
use App\FaturaPije;
use Illuminate\Http\Request;

class FaturaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $faturat = Fatura::all();

        $data = [
            'faturat' => $faturat
        ];

        return view('admin-sony',$data);
    }

    public function faturapije()
    {
        $faturat = FaturaPije::all();

        $data = [
            'faturat' => $faturat
        ];

        return view('admin-sony',$data);
    }
}
