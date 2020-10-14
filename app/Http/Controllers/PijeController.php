<?php

namespace App\Http\Controllers;

use App\Pije;
use App\FaturaPije;
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
        $pijet = Pije::where('qty','>',0)->get();
        $f_aktive = FaturaPije::where('paguar',0)->with('pija')->get();
        $data = [
            'pijet' => $pijet,
            'pijet_papaguar' => $f_aktive
        ];

        return view('pije',$data);
    }

    public function sell($id, Request $request)
    {
        $pija = Pije::find($id);
        $fatura = FaturaPije::create([
            'pije_id' => $pija->id,
            'price' => $pija->price,
            'user_id' => $request->user()->id,
        ]);

        $pija->qty -= 1;
        $pija->update();

        return "sold";
    }

    public function pay($id)
    {
        $f = FaturaPije::find($id);
        $f->paguar = true;
        $f->update();
        return $f;
    }

    public function update($id)
    {
        $pija = Pije::find($id);

        $data = [
            'pija' => $pija
        ];

        return view('new-pije',$data);

    }

    public function create()
    {
        return view('new-pije');

    }

    public function furnizim()
    {
        $pijet = Pije::all();
        $data = [
            'pijet' => $pijet,
        ];

        return view('suppy',$data);
    }

    public function addFurnizim(Request $request)
    {
        $pijet = Pije::all();
        foreach ($pijet as $pija)
        {
            if (isset($request[$pija->id]))
            {
                $pija->qty += intval($request[$pija->id]);
                $pija->update();
            }
        }

        $data = [
            'pijet' => $pijet
        ];

        return view('admin-pije',$data);

    }
}
