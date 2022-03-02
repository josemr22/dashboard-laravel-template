<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbitrator extends Model
{
    use HasFactory;

    public function getPhotoAttribute()
    {
        return $this->image ? asset("storage/{$this->image}") : asset('storage/default.jpg');
    }
}
