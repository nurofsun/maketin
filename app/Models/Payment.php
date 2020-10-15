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
        'created_at',
        'status',
        'student_id'
    ];

    public function student() 
    {
        return $this->belongsTo('App\Models\Student');
    }
}
