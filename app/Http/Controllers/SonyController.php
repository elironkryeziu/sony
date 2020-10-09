<?php

namespace App\Http\Controllers;

use App\Sony;
use Illuminate\Http\Request;

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
        // return $data;
        

        return view('sony',$data);
    }

    public function show($id, Request $request)
    {
        $data = [
            'id' => $id
        ];

        return view('single-sony',$data);
    }

    public function start(Request $request)
    {
        return $request;
        // return view('sony');
    }

}
