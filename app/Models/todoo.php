<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todoo extends Model
{
    use HasFactory;
    protected $table = 'todoos';
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'date',
        'done_time',
    ];
}
