<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'number',       // 1..N
        'text',         // isi pertanyaan
        'category',     // emotional|stress|social|self_control
        'is_active',    // bool
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
