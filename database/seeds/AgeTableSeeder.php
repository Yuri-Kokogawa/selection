<?php

use Illuminate\Database\Seeder;

class AgeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         $age1 = new \App\Ages([
          'id' =>'1',
          'age_name'=>'20歳未満',
        ]);
        $age1->save();
        
         $age2 = new \App\Ages([
          'id' =>'2',
          'age_name'=>'20-29歳',
        ]);
        $age2->save();
        
         $age3 = new \App\Ages([
          'id' =>'3',
          'age_name'=>'30-39歳',
        ]);
        $age3->save();
        
        $age4 = new \App\Ages([
          'id' =>'4',
          'age_name'=>'40-49歳',
        ]);
        $age4->save();
        
        $age5 = new \App\Ages([
          'id' =>'5',
          'age_name'=>'50-59歳',
        ]);
        $age5->save();
        
        $age6 = new \App\Ages([
          'id' =>'6',
          'age_name'=>'60歳以上',
        ]);
        $age6->save();

    }
}
