<?php

use Illuminate\Database\Seeder;
use App\ProductKey;

class ProductKeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductKey::class, 25)->create();

    }
}
