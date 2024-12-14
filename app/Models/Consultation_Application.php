<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation_Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'Consultation_Status',
        'Consultation_Date',
        'Consultation_Time',
        'Consultation_Venue',
        'Complaint_Detail',
    ];
}
