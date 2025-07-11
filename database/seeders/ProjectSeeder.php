<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Website Redesign',
            'client_name' => 'ABC Corp',
            'start_date' => '2025-07-01',
            'end_date' => '2025-08-01'
        ]);

        Project::create([
            'title' => 'Mobile App Development',
            'client_name' => 'XYZ Ltd',
            'start_date' => '2025-06-15',
            'end_date' => '2025-09-30'
        ]);
    }
}
