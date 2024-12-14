<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'MarriageInfo_ID',
        'Marriage_Date',
        'Marriage_Venue',
        'Marriage_DowryType',
        'Marriage_DowryAmount',
        'Marriage_HantaranAmount',
        'Marriage_Country',
        'Marriage_State',
    ];
}
