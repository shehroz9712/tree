<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tree Removal',
                'slug' => 'tree-removal',
                'icon' => 'tree-removal.svg',
                'home_content' => 'We remove dead or diseased trees from their roots that can be a menace to your landscape’s clean and fresh look.
',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tree Cutting',
                'slug' => 'tree-cutting',
                'icon' => 'tree-cutting.svg',
                'home_content' => 'Our expert tree arborists cut trees getting in the way so your outdoors has more space than before.
',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Tree Trimming',
                'slug' => 'tree-trimming',
                'icon' => 'tree-triming.svg',
                'home_content' => 'Our tree trimming service shaves off unwanted tree branches that interfere with the overall look of your landscape.
',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Tree Pruning',
                'slug' => 'tree-pruning',
                'icon' => 'tree-pruning.svg',
                'home_content' => 'We save your healthy trees by pruning off dead and damaged branches that hinder the tree’s growth.
',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Stump Removal',
                'slug' => 'stump-removal',
                'icon' => 'stump-removal.svg',
                'home_content' => 'Our tree specialists get rid of annoying leftover tree stumps leaving you a clean and even landscape.
',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Stump Grinding',
                'slug' => 'stump-grinding',
                'icon' => 'stump-grinding.svg',
                'home_content' => 'We offer premium stump grinding services to shave off the stump completely without digging out the landscape.
',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Tree Arborist',
                'slug' => 'tree-arborist',
                'icon' => 'arborist.svg',
                'home_content' => 'Our seasoned tree arborists nearby in {Location} can provide you with expert tree maintenance services.
',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Residential',
                'slug' => 'residential',
                'icon' => 'residential.svg',
                'home_content' => 'We keep your home’s landscape beautiful with our expert tree care, ensuring healthy and well-maintained trees.',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Commercial',
                'slug' => 'commercial',
                'icon' => 'commercial.svg',
                'home_content' => 'Our commercial tree service enhances your business property, providing professional tree care for a neat and welcoming outdoor space',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Emergency',
                'slug' => 'emergency',
                'icon' => 'emergency.svg',
                'home_content' => 'We offer 24/7 emergency tree service to quickly handle any urgent tree issues, keeping your property safe and tidy.

',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}