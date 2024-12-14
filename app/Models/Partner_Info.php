<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner_Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'Partner_ID',
        'Partner_Name',
        'Partner_DOB',
        'Partner_Age',
        'Partner_Race',
        'Partner_Citizenship',
        'Partner_Address',
        'Partner_PhoneNo',
        'Partner_EduLevel',
        'Partner_EmpSector',
        'Partner_EmpPosition',
        'Partner_Income',
        'Partner_Marital',
        'Partner_Mualaf',
        'Partner_CertNo',
    ];
}
