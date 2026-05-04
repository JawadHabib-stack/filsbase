<?php

namespace Modules\Category\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Modules\Category\Models\Category;

class CategoryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        Schema::disableForeignKeyConstraints();

        /*
         * Categories Seed
         * ------------------
         */

        // DB::table('categories')->truncate();
        // echo "Truncate: categories \n";

        Category::factory()->count(20)->create();
        $rows = Category::all();
        echo " Insert: categories \n\n";

        // Enable foreign key checks!
        Schema::enableForeignKeyConstraints();
    }
}
