<?php

namespace App;

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
}
