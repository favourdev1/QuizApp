<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizzes extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'answer',
        'type',
        'category',
        'option_a',
        'option_b',
        'option_c',
        'option_d'

    ];
}