<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class FaturaPije extends Model
{
    //
    protected $table = 'fatura_pije';
    protected $guarded = [];

    public function pija()
    {
        return $this->belongsTo('App\Pije','pije_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getsoldAtAttribute()
    {
        $sold = Carbon::parse($this->created_at);
        return $sold->isoFormat('LT');
    }

    public function getpaidAtAttribute()
    {
        $paid = Carbon::parse($this->updated_at);
        return $paid->isoFormat('LT');
    }

    public function getsoldDateAttribute()
    {
        $date = Carbon::parse($this->created_at);
        return $date->format('d-m-Y');
    }
}
