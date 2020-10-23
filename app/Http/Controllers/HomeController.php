<?php

namespace App\Http\Controllers;

use App\Pije;
use App\Fatura;
use App\FaturaPije;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // return $request->user()->is_admin;
        if (now()->isoFormat('OH')>7)
        {
            //para 12
            $fatura = Fatura::where('created_at','>',today()->setTime(7,0,0));
            $faturapije = FaturaPije::where('updated_at','>',today()->setTime(7,0,0))->where('paguar',1);
        } else 
        {
            //mas 12 
            $fatura = Fatura::where('created_at','>',today()->subdays(1)->setTime(7,0,0));
            $faturapije = FaturaPije::where('updated_at','>',today()->subdays(1)->setTime(7,0,0))->where('paguar',1);

        }

        if ($request->user()->is_admin)
        {
            $fatura = $fatura->orderBy('created_at','desc')->get();
            $faturapije = $faturapije->orderBy('created_at','desc')->get();
        } else
        {
            $fatura = $fatura->where('user_id',$request->user()->id)->orderBy('created_at','desc')->get();
            $faturapije = $faturapije->where('user_id',$request->user()->id)->orderBy('created_at','desc')->get();
        }

        $stock = Pije::get(['name','qty']);

        $data = [
            'fatura' => $fatura,
            'faturapije' => $faturapije,
            'totali_sony' => $fatura->sum('price'),
            'totali_pije' => $faturapije->sum('price'),
            'totali' => $fatura->sum('price')+$faturapije->sum('price'),
            'stock' => $stock
        ];

        // return $data;

        return view('home',$data);
    }
}
