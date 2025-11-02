<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Patient extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'lname',
        'sex',
        'phone',
        'category',
        'age',
        'address',
     
    ];

//     public function age()
// {
//     return Carbon::parse($this->attributes['dob'])->age;
// }

public $timestamps=false;


}
