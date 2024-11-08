<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotel';
    protected $fillable = ['name', 'address', 'city'];

    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
