<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProcessesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('processes')->delete();
        
        \DB::table('processes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'heading' => 'Initial Contact',
                'name' => 'You can either call us, email us, or directly contact us through the online form on our website. Even if you aren’t sure what service plan you need, our tree arborist will be ready to guide you at this point.

',
                'created_at' => '2024-06-14 10:55:51',
                'updated_at' => '2024-06-14 10:55:51',
            ),
            1 => 
            array (
                'id' => 2,
                'heading' => 'Consultation',
                'name' => 'Our certified tree arborist will visit your property to do a thorough inspection of the trees and discuss what needs to be done. They carefully examine each tree and identify needed actions.

',
                'created_at' => '2024-06-14 10:55:51',
                'updated_at' => '2024-06-14 10:55:51',
            ),
            2 => 
            array (
                'id' => 3,
                'heading' => 'Proposal And Estimate
',
                'name' => 'Based on the examination and requirements of your landscape, we will present a proposal to you outlining the work, timeline, and cost in detail. This will be provided in a report format.

',
                'created_at' => '2024-06-14 10:55:51',
                'updated_at' => '2024-06-14 10:55:51',
            ),
            3 => 
            array (
                'id' => 4,
                'heading' => 'Scheduling And Preparation
',
                'name' => 'Once you approve, our company will schedule a team of expert tree arborists at the date and time of your convenience. If needed, we might visit your place to get the area clear of any obstacles.

',
                'created_at' => '2024-06-14 10:55:51',
                'updated_at' => '2024-06-14 10:55:51',
            ),
            4 => 
            array (
                'id' => 5,
                'heading' => 'Tree Service And Clean-Up
',
                'name' => 'Our dedicated arborists perform the agreed-upon work using proper safety equipment and professional techniques. Once servicing has been done, our crew cleans up the work area leaving it spotless.',
                'created_at' => '2024-06-14 10:55:51',
                'updated_at' => '2024-06-14 10:55:51',
            ),
            5 => 
            array (
                'id' => 6,
                'heading' => 'Recommendations',
                'name' => 'After the site work, our certified tree arborist recommends you need post-service care for your trees. This ensures that your tree lives healthily and strongly under your own supervision and care.

',
                'created_at' => '2024-06-14 10:55:51',
                'updated_at' => '2024-06-14 10:55:51',
            ),
            6 => 
            array (
                'id' => 7,
                'heading' => 'Final Walk-Through',
                'name' => 'Once the project has been completed, one of our seasoned representatives will visit your site to thoroughly review the tree service and answer any questions or concerns you might have regarding it.',
                'created_at' => '2024-06-14 10:55:51',
                'updated_at' => '2024-06-14 10:55:51',
            ),
            7 => 
            array (
                'id' => 8,
                'heading' => 'Payment',
                'name' => 'Based on the agreed-upon terms, we send you an invoice and you settle the payment using a payment method that suits you best. We accept cash, credit cards, and online transfers for ease.

',
                'created_at' => '2024-06-14 10:55:51',
                'updated_at' => '2024-06-14 10:55:51',
            ),
        ));
        
        
    }
}