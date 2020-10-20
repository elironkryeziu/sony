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

        $request->day ? $day = $request->day : $day = today()->toDateString();
        $start = new Carbon($day);
        $sonys = Sony::all();
        $users = User::all();

        if ($request->period)
        {
            switch ($request->period) {
                case 'month':
                    $start = new Carbon('first day of this month');
                  break;
                case 'week':
                    $start = new Carbon('first day of this week');
                  break;
                case 'day':
                    $start = now()->subDay();
                  break;
                default:
                    $start = today();
            }
            $faturat = Fatura::where('created_at','>=', $start->setTime(7,00,00))->orderBy('created_at','desc')->get();
        } else 
        {
            $faturat = Fatura::where('created_at','>=', $start->setTime(7,00,00))->orderBy('created_at','desc')->get();

        }

        $data = [
            'sonys' => $sonys,
            'users' => $users,
            'day' => $day,
            'faturat' => $faturat,
            'totali' => $faturat->sum('price')
        ];

        return view('admin-sony',$data);
    }

    public function indexPijet (Request $request)
    {
        $request->day ? $day = $request->day : $day = today()->toDateString();
        $start = new Carbon($day);

        if ($request->period)
        {
            switch ($request->period) {
                case 'month':
                    $start = new Carbon('first day of this month');
                  break;
                case 'week':
                    $start = new Carbon('first day of this week');
                  break;
                case 'day':
                    $start = now()->subDay();
                  break;
                default:
                    $start = today();
            }
            $faturat = FaturaPije::where('created_at','>', $start->setTime(7,00,00))->orderBy('created_at','desc')->get();
        } else 
        {
            $faturat = FaturaPije::where('created_at','>', $start->setTime(7,00,00))->orderBy('created_at','desc')->get();

        }

        $data = [
            'day' => $day,
            'faturat' => $faturat,
            'totali' => $faturat->sum('price')
        ];

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
