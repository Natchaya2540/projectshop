<?php

use Illuminate\Database\Seeder;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            ['name'=>'ขนาดใหญ่'],
            ['name'=>'ขนาดกลาง'],
            ['name'=>'ขนาดเล็ก'],
            ['name'=>'อื่น'],
        ];
        foreach ($data as $d){
            DB:: table('product_types')->insert($d);
        }
    }
}
