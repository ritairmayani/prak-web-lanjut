<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([ 
            'alamat' => 'Jl. Contoh Alamat No.123', 
            'phone' => '0123456789', 
            'email' => 'info@example.com', 
            'footer_description' => 'Ini adalah deskripsi footer.', 
            'tentang_perusahaan' => 'Informasi tentang perusahaan.', 
            'sejarah_perusahaan' => 'Sejarah perusahaan.', 
            'facebook' => 'https://facebook.com/example', 
            'instagram' => 'https://instagram.com/example', 
            'twitter' => 'https://twitter.com/example', 
            'linkedin' => 'https://linkedin.com/example',
        ]);
    }
}
