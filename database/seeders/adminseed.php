<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        admin::create([
           
            'email' => 'drbekritsamira@gmail.com',
            'password' => bcrypt('samira_bekrit_13284'),
        ]);
    }
}
