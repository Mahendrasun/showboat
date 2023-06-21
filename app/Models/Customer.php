<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_name',
        'email',
        'address',
        'pan_number',
        'aadhar_number',
        'aadhar_number',
        'profile_photo_path', 
    ];
}
