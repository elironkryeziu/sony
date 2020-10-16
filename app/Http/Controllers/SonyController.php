<?php

namespace App\Http\Controllers;

use App\Sony;
use App\Fatura;
use Carbon\Carbon;
use App\FaturaAktive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SonyController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sony = Sony::all();

        $data = [
            'sonys' => $sony
        ];

        return view('sony',$data);
    }

    public function show($id, Request $request)
    {
        if(!FaturaAktive::where('sony_id',$id)->exists())
        {
            $on = false;
            $data = [
                'is_on' => $on,
                'id' => $id,
            ];
        } else
        {
            $str = FaturaAktive::where('sony_id',$id)->first();
            $on = true;
            $data = [
                'is_on' => $on,
                'id' => $id,
                'type' => intval($str->type),
                'start' => $str->startTime,
                'minutes' => $str->minutes,
                'price' => $str->price,
            ];
        }

        return view('single-sony',$data);
    }

    public function start(Request $request)
    {
        // return intval($request->type);
        $f_aktive = FaturaAktive::create([
            'sony_id' => intval($request->sony_id),
            'type' => intval($request->type),
            'start' => now(),
            'user_id' => $request->user()->id
        ]);

        $sony = Sony::all();

        $data = [
            'sonys' => $sony
        ];

        return view('sony',$data);

    }

    public function close($id, Request $request)
    {
        try {
            $f_aktive = FaturaAktive::where('sony_id',$id)->first();
            $fatura = Fatura::create([
                'sony_id' => $f_aktive->sony_id,
                'type' => $f_aktive->type,
                'price' => $f_aktive->price,
                'start' => $f_aktive->start,
                'minutes' => $f_aktive->minutes,
                'finish' => now(),
                'user_id' => $request->user()->id,
                'created_at' => now()
            ]);
            $f_aktive->delete();

            return $fatura;
          } catch (\Exception $e) {
          
              return $e->getMessage();
          }
    }

}
