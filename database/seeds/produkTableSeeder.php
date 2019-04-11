<?php

use Illuminate\Database\Seeder;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert(array(['nama' => 'meja', 'id_katagori' => '1', 'qty' =>
		'12', 'harga_beli' => '50000', 'harga_jual' => '540000', ],['nama' => 'kursi', 'id_katagori' => '1', 
		'qty' => '12', 'harga_beli' => '40000', 'harga_jual' => '450000', ] ));
    }
}
