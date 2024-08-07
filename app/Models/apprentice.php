<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'program', 'ficha'];

    public function trainer()
    {
        return $this->belongsTo(trainer::class);
    }
}
