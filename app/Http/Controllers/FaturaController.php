<?php

namespace App\Http\Controllers;

use App\Pije;
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
        // $faturat = FaturaPije::all();
        $pijet = Pije::all();

        $data = [
            'pijet' => $pijet
        ];

        return view('admin-pije',$data);
    }

    public function store(Request $request)
    {
        $pija = Pije::create([
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,

        ]);

        $pijet = Pije::all();

        $data = [
            'pijet' => $pijet
        ];

        return view('admin-pije',$data);
    }

    public function update($id, Request $request)
    {
        return $request;
        $pija = Pije::find($id);
        $pija->name = $request->name;
        $pija->price = $request->price;
        $pija->qty = $request->qty;
        $pija->update();
        
        $pijet = Pije::all();

        $data = [
            'pijet' => $pijet
        ];

        return view('admin-pije',$data);
    }
}
