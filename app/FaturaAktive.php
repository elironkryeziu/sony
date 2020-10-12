<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class FaturaAktive extends Model
{
    protected $table = 'sony_active';
    protected $guarded = [];

    public function sony()
    {
        return $this->belongsTo('App\Sony');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getminutesAttribute()
    {
        $start = Carbon::parse($this->start);
        return $start->diffInMinutes(now());
    }

    public function getstartTimeAttribute()
    {
        $start = Carbon::parse($this->start);
        return $start->isoFormat('LT');
    }

    public function getpriceAttribute()
    {
        $minutes = $this->minutes;
        return (1.666*$minutes)/100;
    }
}
