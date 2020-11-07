<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'month',
        'year',
        'status',
        'student_id',
        'created_at',
        'updated_at',
    ];

    public function student() 
    {
        return $this->belongsTo('App\Models\Student', 'student_id');
    }
}
