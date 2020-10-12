<?php

namespace App;

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
}
