<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Seo;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'=>'H2BIndia',
            'email'=>'h2bindia@gmail.com',
            'password'=>Hash::make('12345678'),
            'phone_number'=>'12345678',
        ]);

        Setting::create([
            'name'=>'H2BIndia',
            'email'=>'h2bindia@gmail.com',
            'phone_number'=>'9865302145',
            'address'=>'h2bindia',
            'logo'=>'uploads/companyimage/logo.png',
            'favicon'=>'uploads/companyimage/logo.png',
            'common_image'=>'uploads/companyimage/logo.png',
        ]);

        Seo::create([
            'meta_title'=>'H2BIndia',
            'meta_keyword'=>'H2BIndia',
            'meta_description'=>'H2BIndia',
            'og_image'=>'uploads/companyimage/logo.png',
            'google_tagmanager'=>"<script></script>",
            'google_analytics'=>"<script></script>",
        ]);
    }
}
