<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Witness_Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'Witness_IC',
        'Witness_Name',
        'Witness_Address',
        'Witness_PhoneNo',
        'Witness_Category',
    ];
}
