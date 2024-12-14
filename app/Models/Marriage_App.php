<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application_App extends Model
{
    use HasFactory;

    protected $fillable = [
        'Application_ID',
        'Application_Type',
        'Application_Date',
        'Application_Status',
    ];
}
