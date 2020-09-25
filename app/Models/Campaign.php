<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model

{
    protected $guarded = [];

    protected function contests(){
        return $this->hasMany(Contest::class);
     }
}
