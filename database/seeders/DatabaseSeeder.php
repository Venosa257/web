<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Contact_type;
use App\Models\Siswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Siswa::factory()->create([
            'name' => 'Venosa Sirr Arrumi',
            'about' => 'XII RPL 2',
            'photo' => 'venosa.jpg'
        ]);

    }
}