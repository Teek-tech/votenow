<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    public function contests(){
        return $this->belongsToMany(Contest::class);
    }
}
