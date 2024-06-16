<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Reset the site_settings table
         */


        DB::table('settings')->insert([
            'title'           => 'The Tree Service Pro',
            'email'           => 'info@thetreeservicepro.com',
            'phone'           => '123456789',
            'address'         => '23 Ranking Street, New York',
            'dark-logo'       => 'Darklogo.webp',
            'logo'            => 'logo.webp',
            'favicon'         => 'favicon.png',
            'facebook'        => 'facebook.com',
            'twitter'         => 'twitter.com',
            'instagram'         => 'instagram.com',
            'linkedin'         => 'linkedin.com',
            'footer_scripts'  => 'thetreeservicepro.com',
            'footer_sentence' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere delectus qui placeat inventore consectetur repellendus optio debitis.',
            'copyright'       => 'Bookmyspot .com SV Ltd',
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ]);
    }
}
