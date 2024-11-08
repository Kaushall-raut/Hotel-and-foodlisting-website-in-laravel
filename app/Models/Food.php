<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['name', 'price', 'hotel_id'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
