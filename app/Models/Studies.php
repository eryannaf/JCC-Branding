<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studies extends Model
{
    use HasFactory;

    protected $fillable = [
        'mata_pelajaran',
        'waktu',
        'hari',
        'user_id'
    ];
}
