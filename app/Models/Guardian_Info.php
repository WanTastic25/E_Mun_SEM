<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian_Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'Guardian_IC',
        'Guardian_Name',
        'Guardian_Address',
        'Guardian_DOB',
        'Guardian_Age',
        'Guardian_PhoneNo',
        'Guardian_Relationship',
        'Guardian_MarriageInfo',
    ];
}
