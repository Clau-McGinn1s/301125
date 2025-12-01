<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todo extends Model
{
    protected $fillable = ['name', 'desc', 'due_date'];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
