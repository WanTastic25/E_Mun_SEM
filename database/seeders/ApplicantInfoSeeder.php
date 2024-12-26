<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Applicant_Info;

class ApplicantInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Applicant_Info::create([
            'User_ID' => 1,
            'Applicant_DOB' => '1990-01-01',
            'Applicant_Race' => 'Malay',
            'Applicant_Citizenship' => 'Malaysian',
            'Applicant_Address' => '123 Jalan ABC, Kuala Lumpur',
            'Applicant_EduLevel' => 'Bachelor',
            'Applicant_EmpInfo' => 'Engineer',
            'Applicant_Income' => 3000.00,
            'Applicant_Marital' => 'Single',
            'Applicant_Mualaf' => 0,
        ]);

        Applicant_Info::create([
            'User_ID' => 2,
            'Applicant_DOB' => '1995-05-10',
            'Applicant_Race' => 'Chinese',
            'Applicant_Citizenship' => 'Malaysian',
            'Applicant_Address' => '456 Jalan DEF, Shah Alam',
            'Applicant_EduLevel' => 'Master',
            'Applicant_EmpInfo' => 'Manager',
            'Applicant_Income' => 5000.00,
            'Applicant_Marital' => 'Married',
            'Applicant_Mualaf' => 1,
        ]);
    }
}
