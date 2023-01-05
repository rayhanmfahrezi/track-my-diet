<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodayFood extends Model
{
    use HasFactory;
    protected $table = "today_foods";

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
