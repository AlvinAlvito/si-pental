<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResponseAnswer extends Model
{
    protected $fillable = [
        'response_id',
        'question_no',
        'category',
        'score',
    ];

    public function response()
    {
        return $this->belongsTo(Response::class);
    }
}
