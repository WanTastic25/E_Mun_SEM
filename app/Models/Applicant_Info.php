<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant_Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'Applicant_ID',
        'Applicant_Name',
        'Applicant_DOB',
        'Applicant_Age',
        'Applicant_Race',
        'Applicant_Citizenship',
        'Applicant_Address',
        'Applicant_PhoneNo',
        'Applicant_EduLevel',
        'Applicant_EmpSector',
        'Applicant_EmpPosition',
        'Applicant_Income',
        'Applicant_Marital',
        'Applicant_Mualaf',
        'Applicant_CertNo',

    ];
}
