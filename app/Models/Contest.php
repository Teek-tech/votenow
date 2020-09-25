<?php

namespace App\Models;

use App\Contestant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contest extends Model
{
    
    protected function campaign(){
        return $this->belongsTo(Campaign::class);
     }

    protected function contestant(){
        return $this->hasMany(Contestant::class);
    }
}
