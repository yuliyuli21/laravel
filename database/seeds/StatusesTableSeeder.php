<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//为了测试方便且提高假数据的生成速度，只为前三个用户生成共 30 条微博假数据。
        $user_ids = ['1','2','3'];
        //通过 app() 方法来获取一个 Faker 容器 的实例
        $faker = app(Faker\Generator::class);

        $statuses = factory(Status::class)->times(30)->make()->each(function ($status) use ($faker, $user_ids) {
        	//借助 randomElement 方法来取出用户 id 数组中的任意一个元素并赋值给微博的 user_id，使得每个用户都拥有不同数量的微博
            $status->user_id = $faker->randomElement($user_ids);
        });

        Status::insert($statuses->toArray());

    }
}
