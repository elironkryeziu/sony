<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{
    protected $table = 'fatura';
    protected $guarded = [];

    public function sony()
    {
        return $this->belongsTo('App\Sony');
    }
}
