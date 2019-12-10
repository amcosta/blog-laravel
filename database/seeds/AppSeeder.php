<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSeeder extends Seeder
{
    /**
     * @var \Faker\Generator
     */
    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedAuthors();
        $this->seedPosts(range(1, 10));
    }

    private function seedAuthors()
    {
        $data = array_map(function($i) {
            return [ 'name' => $this->faker->name ];
        }, range(1, 10));

        DB::table('authors')->insert($data);
    }

    private function seedPosts(array $authorIds)
    {
        $data = array_map(function($i) use ($authorIds) {
            $key = array_rand($authorIds);
            return [
                'title' => $this->faker->title,
                'content' => $this->faker->text(10000),
                'author_id' => $authorIds[$key]
            ];
        }, range(1, 30));

        DB::table('posts')->insert($data);
    }
}
