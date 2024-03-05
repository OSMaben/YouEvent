<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

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

        $categories = [
            'Arts',
            'Business',
            'Coaching and Consulting',
            'Community and Culture',
            'Entrepreneurship',
            'Education and Training',
            'Family and Friends',
            'Fashion and Beauty',
            'Film and Entertainment',
            'Food and Drink',
            'Government and Politics',
            'Health and Wellbeing',
            'Hobbies and Interest',
            'Music and Theater',
            'Religion and Spirituality',
            'Science and Technology',
            'Sports and Fitness',
            'Travel and Outdoor',
            'Visual Arts',
            'Others',
        ];

        foreach ($categories as $categoryName) {
            Category::create(['category_type' => $categoryName]);
        }
    }
}
