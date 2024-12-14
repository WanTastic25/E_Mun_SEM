<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$users = [
			[
				'User_IC' => '123456789012',
				'User_Name' => 'admin',
				'User_Gender' => 'Lelaki',
				'Staff_ID' => 'stf000',
				'email' => 'admin@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '0987654321',
				'role' => 2,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '111111111111',
				'User_Name' => 'staff1',
				'User_Gender' => 'Lelaki',
				'Staff_ID' => 'stf001',
				'email' => 'staff1@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '3673459567',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '222222222222',
				'User_Name' => 'staff2',
				'User_Gender' => 'Perempuan',
				'Staff_ID' => 'stf002',
				'email' => 'staff2@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '1029856478',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '333333333333',
				'User_Name' => 'staff3',
				'User_Gender' => 'Lelaki',
				'Staff_ID' => 'stf003',
				'email' => 'staff3@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '2039589376',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '444444444444',
				'User_Name' => 'staff4',
				'User_Gender' => 'Perempuan',
				'Staff_ID' => 'stf004',
				'email' => 'staff4@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '3095892756',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '555555555555',
				'User_Name' => 'staff5',
				'User_Gender' => 'Lelaki',
				'Staff_ID' => 'stf005',
				'email' => 'staff5@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '2930485728',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '666666666666',
				'User_Name' => 'staff6',
				'User_Gender' => 'Perempuan',
				'Staff_ID' => 'stf006',
				'email' => 'staff6@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '3027694036',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '777777777777',
				'User_Name' => 'staff7',
				'User_Gender' => 'Lelaki',
				'Staff_ID' => 'stf007',
				'email' => 'staff7@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '4086746591',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '888888888888',
				'User_Name' => 'staff8',
				'User_Gender' => 'Perempuan',
				'Staff_ID' => 'stf008',
				'email' => 'staff8@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '39403867564',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '999999999999',
				'User_Name' => 'staff9',
				'User_Gender' => 'Lelaki',
				'Staff_ID' => 'stf009',
				'email' => 'staff9@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '2030584764',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '101010101010',
				'User_Name' => 'staff10',
				'User_Gender' => 'Perempuan',
				'Staff_ID' => 'stf010',
				'email' => 'staff10@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '4869385763',
				'role' => 1,
				'password' => bcrypt('12345678'),
			],
			[
				'User_IC' => '012345678901',
				'User_Name' => 'user123',
				'User_Gender' => 'Perempuan',
				'email' => 'user123@gmail.com',
				'email_verified_at' => '2023-05-24 11:17:08',
				'User_Phone_Number' => '4869385763',
				'role' => 0,
				'password' => bcrypt('12345678'),
			],
		];

		foreach ($users as $key => $user) {
			User::create($user);
		}
	}
}
