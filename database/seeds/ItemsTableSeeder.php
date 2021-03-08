<?php

use App\Models\Items;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $dataSet = [
        //     [
                
        //         'user_id' => 1,
        //         'item_title' => 'わかりやすい統計学',
        //         'price' => 300,
        //         'item_explanation' => 'ここに教科書の説明を書きます',
        //         'item_state' => '書き込みなし',
        //         'school_name' => '東京理科大学',
        //         'shipping' => '送料込み（出品者負担）',
        //         'from_where' => "埼玉",
                
        
                
        //     ],
        //     [
                
        //         'user_id'=> 1,
        //         'item_title' => 'わかりやすい経済学',
        //         'price' => 300,
        //         'item_explanation' => 'ここに教科書の説明を書きます',
        //         'item_state' => '書き込みあり',
        //         'school_name' => '東京理科大学',
        //         'shipping' => '送料込み（出品者負担）',
        //         'from_where' => "東京",
                
                
        //     ],
        //     [
                
        //         'user_id'=> 2,
        //         'item_title' => '大学の微分積分',
        //         'price' => 400,
        //         'item_explanation' => 'ここに教科書の説明を書きます',
        //         'item_state' => '書き込みあり',
        //         'school_name' => '日本大学',
        //         'shipping' => '送料込み（出品者負担）',
        //         'from_where' => "東京",
                
        //     ],
        // ];

        // foreach ($dataSet as $data) {
        //     Items::create($data);
        // }

       // factory(Items::class, 10)->create();
    }
}
