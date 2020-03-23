<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [['name'=>' ผ้าปูเตียงขนาดใหญ่','product_type_id'=>1,'cost'=>10,'quantity'=>0],
            ['name'=>'ผ้าปูเตียงขนาดเล็ก','product_type_id'=>2,'cost'=>5,'quantity'=>0],
            ['name'=>'ปลอกหมอน','product_type_id'=>2,'cost'=>7,'quantity'=>0],

            ];

        foreach ($data as $d){
            DB:: table('products')->insert($d);
        }
    }
}
