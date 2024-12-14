<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$courses = [
			[
				'Course_Organization' => 'PEJABAT AGAMA ISLAM MARAN',
				'Course_Venue' => 'DEWAN AUDITORIUM AL-GHAZALI PAID MARAN',
				'Course_Address' => 'BANGUNAN 3, PEJABAT AGAMA ISLAM KUANTAN, 26600, PAHANG',
				'Course_District' => 'KUANTAN',
				'Course_DateStart' => '28 JANUARI 2023',
				'Course_DateEnd' => '29 JANUARI 2023',
				'Course_TimeStart' => '0800',
				'Course_TimeEnd' => '1000',
				'Course_Slot' => 54,
				'Course_Siri' => 'MTN/0011/2022',
				'Course_Capacity' => 100,
				'Course_Staff' => 'NURHAYATI BINTI TOLIB',
				'Course_StaffNo' => '0193211113',

			],
			[
				'Course_Organization' => 'PEJABAT AGAMA ISLAM JERANTUT',
				'Course_Venue' => 'DEWAN SUNGAI JAN',
				'Course_Address' => 'LAPANG BESAR, JALAN 3, 25569, RAUB, PAHANG',
				'Course_District' => 'RAUB',
				'Course_DateStart' => '1 FEBRUARI 2023',
				'Course_DateEnd' => '10 FEBRUARI 2023',
				'Course_TimeStart' => '0830',
				'Course_TimeEnd' => '1030',
				'Course_Slot' => 66,
				'Course_Siri' => 'MLN/9011/2022',
				'Course_Capacity' => 100,
				'Course_Staff' => 'FAHMI BIN EMBUN',
				'Course_StaffNo' => '0173222292',
				
			],
			[
				'Course_Organization' => 'PEJABAT AGAMA ISLAM TEMERLOH',
				'Course_Venue' => 'DEWAN BESAR TEMERLOH',
				'Course_Address' => 'JALAN TEGAK, BANGUNAN DEWASA, NO 7, 2600, KUANTAN, PAHANG',
				'Course_District' => 'KUANTAN',
				'Course_DateStart' => '7 MARCH 2023',
				'Course_DateEnd' => '9 MARCH 2023',
				'Course_TimeStart' => '0800',
				'Course_TimeEnd' => '1000',
				'Course_Slot' => 89,
				'Course_Siri' => 'MTN/7262/2023',
				'Course_Capacity' => 100,
				'Course_Staff' => 'ALI BIN ABU',
				'Course_StaffNo' => '0198872900',

			],
		];

		foreach ($courses as $key => $course) {
			Course::create($course);
		}
	}
}
