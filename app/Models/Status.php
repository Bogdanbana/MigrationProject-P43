<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function status(): HasMany
    {
        return $this->belongsTo(Status::class);
    }
}
