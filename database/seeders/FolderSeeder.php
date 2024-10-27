<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Folder;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Folder::create(['name' => 'Root', 'parent_id' => null]);
    Folder::create(['name' => 'Documents', 'parent_id' => 1]);
    Folder::create(['name' => 'Pictures', 'parent_id' => 1]);
    Folder::create(['name' => 'Music', 'parent_id' => 1]);
    Folder::create(['name' => 'Work', 'parent_id' => 2]);
    }
}
