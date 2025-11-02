<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommend_test extends Model
{
    use HasFactory;
    protected $fillable = [
        'Pres_id',
        'doctor_id',
        'patient_id',
        'recommend_test',
        'test1',
        'test2',
    ];

    public $timestamps=false;
}
