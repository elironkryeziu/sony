<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{
    protected $table = 'fatura';
    protected $guarded = [];

    public function sony()
    {
        return $this->belongsTo('App\Sony');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getstartTimeAttribute()
    {
        $start = Carbon::parse($this->start);
        return $start->isoFormat('LT');
    }

    public function getfinishTimeAttribute()
    {
        $finish = Carbon::parse($this->finish);
        return $finish->isoFormat('LT');
    }
}
