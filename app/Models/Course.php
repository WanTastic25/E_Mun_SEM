<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

		protected $fillable = [
			'Course_Organization',
			'Course_Venue',
			'Course_Address',
			'Course_District',
			'Course_DateStart',
			'Course_DateEnd',
			'Course_TimeStart',
			'Course_TimeEnd',
			'Course_Public',
			'Course_Slot',
			'Course_Siri',
			'Course_Capacity',
			'Course_Staff',
			'Course_StaffNo',
		];

		protected $primaryKey = 'Course_ID';
}
