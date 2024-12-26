<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant_Info extends Model
{
    use HasFactory;

    protected $table = 'applicant_info'; // Table name

    protected $primaryKey = 'Applicant_ID'; // Specify the primary key

    public $incrementing = true; // Indicate that the primary key is auto-incrementing

    protected $fillable = [
        'User_ID',
        'Applicant_DOB',
        'Applicant_Race',
        'Applicant_Citizenship',
        'Applicant_Address',
        'Applicant_EduLevel',
        'Applicant_EmpInfo',
        'Applicant_Income',
        'Applicant_Marital',
        'Applicant_Mualaf',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_ID'); // Define relationship with the 'users' table
    }
}
