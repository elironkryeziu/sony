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
        if ($minutes > 1)
        {
            if ($this->type == 2)
            {
                if ($minutes < 30)
                {
                    return 0.5;
                } else
                {
                    return floor($minutes/6)/10;
                }
            } else 
            {
                if ($minutes < 30)
                {
                    return 1.0;
                } else
                {
                    return (2*floor($minutes/6))/10;
                }
            }
        } else
        {
            return 0;
        }
    }
}
