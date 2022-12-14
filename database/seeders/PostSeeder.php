<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(20)->create();

        User::find(1)->update([
            'name' => 'Drashtant',
            'email' => 'drashtant@nayak.ca'
        ]);
    }
}
