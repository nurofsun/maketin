<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'level'
    ];

    public function payments() {
        return $this->hasMany('App\Models\Payment');
    }
}
