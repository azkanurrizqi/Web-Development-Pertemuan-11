<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
        {
            DB::table('products')->insert([
                [
                    'judul'=> 'produk1',
                    'deskripsi' => 'Deskripsi untuk produksi',
                    'harga'=> 10000,
                    'created_at'=> now(),
                    'update_at'=> now(),
                ]
            
            
            
                ]);
        
    }
}
