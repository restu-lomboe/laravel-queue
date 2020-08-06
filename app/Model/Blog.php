<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['publish'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
