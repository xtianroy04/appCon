<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = 
    [
        'first_name',
        'last_name',
        'address',
        'age',
        'gender',
        'school'
    ];

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'age' => 'required|integer|min:0',
        'gender' => 'required|in:male,female',
        'school' => 'required|string|max:255',
    ];

    use HasFactory;
}
