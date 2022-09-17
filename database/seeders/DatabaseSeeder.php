<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Listing::factory(10)->create();

        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Listing::create([
        //     'title' => 'Senior Laravel Developer',
        //     'tags' => 'laravel', 'javascript',
        //     'company' => 'Index Solutions',
        //     'location' => 'Nairobi',
        //     'email' => 'info@index.com',
        //     'website' => 'index.com',
        //     'description' => 'A Laravel developer is responsible for: building and maintaining modern web applications using standard web development tools. writing clean and secure modular codes that have undergone strict testing and evaluation. checking the validity and consistency of HTML, CSS, and JavaScript on different platforms'
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Api Developer',
        //     'tags' => 'laravel', 'javascript',
        //     'company' => 'Index Solutions',
        //     'location' => 'Nairobi',
        //     'email' => 'info@index.com',
        //     'website' => 'index.com',
        //     'description' => 'A Laravel developer is responsible for: building and maintaining modern web applications using standard web development tools. writing clean and secure modular codes that have undergone strict testing and evaluation. checking the validity and consistency of HTML, CSS, and JavaScript on different platforms'
        // ]);
    }
}
