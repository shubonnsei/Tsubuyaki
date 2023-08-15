<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tweet;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;



class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tweets')->insert([
        //     'contents' => Str::random(100),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        Tweet::factory()->count(10)->create();
        // 这段代码的作用是创建10条推文记录。 
        // 代码的步骤如下： 
        // 1.  Tweet::factory()  创建一个推文工厂对象。 
        // 2.  count(10)  设置要创建的推文记录数量为10。 
        // 3.  create()  调用工厂对象的create方法，创建并保存10条推文记录。
    }
}
