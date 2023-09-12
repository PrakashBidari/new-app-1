<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    use HasFactory;

    protected $table = 'request_form';
    protected $fillable = [
        'name',
        'email',
        'address',
        'blood_type',
        'phone',
    ];
}
