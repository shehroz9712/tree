<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Barbara',
                'content' => 'I wanted my lawn ready for the evening since some important guests were coming over. The Tree Service Pros did such a great job in grooming all the trees and making my outdoors look spick and span. Highly recommended!',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mathew',
                'content' => 'We always thought tree services were overly expensive until we stumbled upon The Tree Service Pros. I was really impressed by the attention to detail their men give to our garden. We had stumps removed and dead trees cut at such an unbelievably economical price. Would hire them again!',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Aidra',
                'content' => 'Very professional work by The Tree Service Pros. Their team is very knowledgeable as they did an in-depth inspection of my outdoors and provided me with the best services on a budget. Love my outdoors after the tree grooming!',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}