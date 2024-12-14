<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_App extends Model
{
    use HasFactory;

    protected $fillable = [
        'Course_ApplicationID',
        'Course_CertNo',
        'Course_ApplyDate',
    ];
}
