<?php

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
         $category1 = new \App\Categories([
            'category_name_id' => '1',
            'category_name' => '仕事'
        ]);
        $category1->save();

        $category2 = new \App\Categories([
            'category_name_id' => '2',
            'category_name' => '勉強'
        ]);
        $category2->save();
        
         $category3 = new \App\Categories([
            'category_name_id' => '3',
            'category_name' => '恋愛'
        ]);
        $category3->save();

        $category4 = new \App\Categories([
            'category_name_id' => '4',
            'category_name' => '学校'
        ]);
        $category4->save();
        
         $category5 = new \App\Categories([
            'category_name_id' => '5',
            'category_name' => 'アニメ/漫画'
        ]);
        $category5->save();

        $category6 = new \App\Categories([
            'category_name_id' => '6',
            'category_name' => 'ゲーム'
        ]);
        $category6->save();
        
         $category7 = new \App\Categories([
            'category_name_id' => '7',
            'category_name' => '芸能'
        ]);
        $category7->save();

        $category8= new \App\Categories([
            'category_name_id' => '8',
            'category_name' => '映画/読書'
        ]);
        $category8->save();
        
         $category9 = new \App\Categories([
            'category_name_id' => '9',
            'category_name' => '健康'
        ]);
        $category9->save();

        $category10 = new \App\Categories([
            'category_name_id' => '10',
            'category_name' => 'ファッション'
        ]);
        $category10->save();
        
         $category11 = new \App\Categories([
            'category_name_id' => '11',
            'category_name' => 'グルメ'
        ]);
        $category11->save();

        $category12 = new \App\Categories([
            'category_name_id' => '12',
            'category_name' => 'ニュース/政治'
        ]);
        $category12->save();
        
         $category13 = new \App\Categories([
            'category_name_id' => '13',
            'category_name' => 'スポーツ'
        ]);
        $category13->save();

        $category14 = new \App\Categories([
            'category_name_id' => '14',
            'category_name' => '人生'
        ]);
        $category14->save();
        
         $category15 = new \App\Categories([
            'category_name_id' => '15',
            'category_name' => 'その他'
        ]);
        $category15->save();

    }
}
