<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sony extends Model
{
    protected $table = 'sony';
    protected $guarded = [];

    public function faturat()
    {
        return $this->hasMany('App\Fatura');
    }

    public function getisOnAttribute()
    {
        if (FaturaAktive::where('sony_id',$this->id)->exists())
        {
            return 1;
        } else 
        {
            return 0;
        }
    }

    public function gettypeAttribute()
    {
        if (FaturaAktive::where('sony_id',$this->id)->exists())
        {
            $type = FaturaAktive::where('sony_id',$this->id)->first();
            return $type->type;
        } else 
        {
            return 0;
        }
    }
}
