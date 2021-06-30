<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    /** Every listing has 1 user */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
