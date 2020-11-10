<?php

use Illuminate\Database\Seeder;
use App\Kategori;
use App\Yazi;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create();
        factory(Kategori::class,10)->create();
        factory(Yazi::class,50)->create();
    }
}
