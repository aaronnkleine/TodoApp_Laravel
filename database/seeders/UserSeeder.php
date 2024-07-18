<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        User::factory()
            ->has(Todo::factory()
                ->count(10)
                ->afterCreating(function (Todo $todo) {
                    $tagIds = Tag::query()->inRandomOrder()->limit(3)->pluck('id')->toArray();
                    $todo->tags()->sync($tagIds);
                })
            )->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

        User::factory(10)
            ->has(Todo::factory()->count(10)->afterCreating(function (Todo $todo) {
                $tagIds = Tag::query()->inRandomOrder()->limit(3)->pluck('id')->toArray();
                $todo->tags()->sync($tagIds);
            }))
            ->create();


    }
}
