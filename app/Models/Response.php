<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = [
        'name',
        'age',
        'gender',
        'total_score',
        'category_scores',
    ];

    protected $casts = [
        'category_scores' => 'array',
    ];

    public function answers()
    {
        return $this->hasMany(ResponseAnswer::class);
    }
}
