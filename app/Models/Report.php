<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    use SoftDeletes, Hasfactory;

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
