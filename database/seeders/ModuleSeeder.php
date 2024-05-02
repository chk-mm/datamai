<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    public function run()
    {
        Module::create([
            'title' => 'Module 1',
            'content' => 'Sample content for Module 1',
            'user_id' => 1,
        ]);

        Module::create([
            'title' => 'Module 2',
            'content' => 'Sample content for Module 2',
            'user_id' => 1,
        ]);

        // Add more sample data as needed
    }
}
