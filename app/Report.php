<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['record', 'name', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
