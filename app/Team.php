<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = (['name', 'title', 'description', 'image', 'sort_order', 'deleted']);

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
