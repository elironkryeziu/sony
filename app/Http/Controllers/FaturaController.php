<?php

namespace App\Http\Controllers;

use App\Pije;
use App\Sony;
use App\User;
use App\Fatura;
use Carbon\Carbon;
use App\FaturaPije;
use Illuminate\Http\Request;

class FaturaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        // return isset($request->sony != 'all');
        $request->day ? $day = $request->day : $day = today()->toDateString();
        $start = new Carbon($day);
        $sonys = Sony::all();
        $users = User::all();

        $faturat = Fatura::where('created_at','>', $start->setTime(7,0,0));

        if ($request->sony)
        {
            if ($request->sony != 0 || $request->sony != "")
            {
                $faturat = $faturat->where('sony_id',$request->sony);
            }
        }

        if ($request->user)
        {
            if ($request->user != 0 || $request->user != "")
            {
                $faturat = $faturat->where('user_id',$request->user);

            }
        }

        $faturat = $faturat->orderBy('created_at','desc')->get();

        $data = [
            'sonys' => $sonys,
            'users' => $users,
            'day' => $day,
            'selected_sony' => $request->sony,
            'selected_user' => $request->user,
            'faturat' => $faturat,
            'totali' => $faturat->sum('price')
        ];

        // return $data;

        return view('admin-sony',$data);
    }

    public function indexPijet (Request $request)
    {
        $request->day ? $day = $request->day : $day = today()->toDateString();
        $start = new Carbon($day);
        $pijet = Pije::get(['id','name']);
        $users = User::all();

        $faturat = FaturaPije::where('updated_at','>', $start->setTime(7,0,0))->where('paguar',1);

        if ($request->pija)
        {
            if ($request->pija != "all" || $request->pija != "")
            {
                $faturat = $faturat->where('pije_id',$request->pija);
            }
        }

        if ($request->user)
        {
            if ($request->user != "all" || $request->user != "")
            {
                $faturat = $faturat->where('user_id',$request->user);

            }
        }

        $faturat = $faturat->orderBy('updated_at','desc')->get();

        $data = [
            'pijet' => $pijet,
            'users' => $users,
            'day' => $day,
            'selected_pija' => $request->pija,
            'selected_user' => $request->user,
            'faturat' => $faturat,
            'totali' => $faturat->sum('price')
        ];

        // return $data;

        return view('sales',$data);
    }

    public function faturapije()
    {
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
        // return $request;
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
