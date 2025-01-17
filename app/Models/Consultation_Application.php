<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation_Application extends Model
{
    use HasFactory;

    protected $table = 'consultation_applications';

    protected $fillable = [
        'wife_name',
        'wife_ic',
        'registration_no',
        'application_date',
        'status',
        'remarks',
        'complaint_detail'
    ];
}
