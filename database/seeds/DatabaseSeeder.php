<?php

use App\Models\Users;
use App\Models\Posts;
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
        factory(Users::class, 20)->create()
            ->each(function ($user) {
                $user->posts()->save((factory(Posts::class)->make()));
            });
    }
}
