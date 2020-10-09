<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pije extends Model
{
    protected $table = 'pijet';
    protected $guarded = [];

    public function faturat()
    {
        return $this->hasMany('App\FaturaPije');
    }
}
