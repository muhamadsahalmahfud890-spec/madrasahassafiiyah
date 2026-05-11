<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PmbmRegistration extends Model
{
    protected $fillable = [
        'registration_number', 'full_name', 'nik', 'birth_date',
        'birth_place', 'gender', 'parent_name', 'phone', 'email',
        'previous_school', 'status', 'notes'
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];
}
