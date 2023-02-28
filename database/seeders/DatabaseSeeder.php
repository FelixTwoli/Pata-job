<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\Listings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

       Listing::create([
              'titile' => 'Job 1',
              'description' => 'Description 1',
                'company' => 'Company 1',
                'location' => 'Location 1',
                'email' => 'user1@gmail.com',
                'website' => 'www.website1.com',
                'updated_at' => '2021-05-01 00:00:00',
                'created_at' => '2021-05-01 00:00:00',
                'tags' => 'tag1, tag2, tag3',
         ]);


        Listing::create([
            'titile' => 'Job 2', 
            'description' => 'Description 2',
            'company' => 'Company 2',
            'location' => 'Location 2',
            'email' => 'user2@gmail.com',
            'website' => 'www.website2.com',
            'updated_at' => '2021-05-01 00:00:00',
            'created_at' => '2021-05-01 00:00:00',
            'tags' => 'tag1, tag2, tag3',
            

        ]);


        Listing::create([
            'titile' => 'Job 3', 
            'description' => 'Description 3',
            'company' => 'Company 3',
            'location' => 'Location 3',
            'email' => 'user3@gmail.com',
            'website' => 'www.website3.com',
            'updated_at' => '2021-05-01 00:00:00',
            'created_at' => '2021-05-01 00:00:00',
            'tags' => 'tag1, tag2, tag3',
        ]);
      
       
         
        
        
    }
}