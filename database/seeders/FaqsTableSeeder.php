<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => 'How much does a tree service cost in {Location}?',
                'answer' => 'Tree service costs are based on tree types, sizes, and its condition. Since there are a variety of tree services available, the cost is also dependent on what service you need. On average, tree trimming and pruning can cost anywhere from $330 to $450, while tree removal costs around $700 to $950. The complexity of the service required also matters when deciding the cost. For example, if the tree is really old and its branches have expanded really deep, the cost will be higher. ',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'question' => 'When should I call a tree service?',
                'answer' => 'If your outdoor landscape has dead, diseased, or trees with damaged branches, it is best to call a local tree company in {Location} to offer the needful service. A tree service can also be called for emergency reasons if your tree is interfering with your power lines or is tilting towards the walkways.
',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'question' => 'What qualifications should a tree service company in {Location} have?
',
                'answer' => 'A tree service company nearby in {Location} should have ISA-certified tree arborists on their team who have completed their training with success. Apart from that, licenses and permits are a must for tree work in {Location} according to its local ordinances and state laws. 
',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'question' => 'What if my tree is near power lines?
',
                'answer' => 'In case your tree is dangerously close to a power line, never attempt to trim or cut it on your own since it is a very serious safety hazard. Instead, contact a professional tree company in {Location} to take care of the job who will first identify underground lines and exercise proper SOPs to get the job done.
',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'question' => 'How can I choose a reputable tree expert company in {Location}?',
                'answer' => 'Before choosing a tree company in {Location}, it is important to know about its reputation and past experience as a tree service provider. Customer reviews serve as the best tool to know how professional arborists are at their jobs. We at The Tree Service Pros have successfully worked with 1000+ customers at both residential and commercial levels, attaining their satisfaction and happiness.
',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'question' => 'What should I do after a tree service completes the work?',
                'answer' => 'Ideally, reputed tree companies in {Location} take full responsibility for cleaning the work area after service completion. As one of the top tree service companies in {Location}, we make sure that the place is cleared of all debris, wood chips, and leaves so that you don’t have to put any effort into cleaning your outdoors.
',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'question' => 'What time of the year is best for tree removal service?',
                'answer' => 'Late winter or early spring is the best time for hiring a tree removal or cutting service since the trees are mostly dormant in that season. For more information on what specific services are recommended for trees, our expert arborists near you are always ready to assist you through a call or a consultation visit.',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'question' => 'Is it safe to remove a tree?',
                'answer' => 'While cutting trees is an environmental concern, removing dead and diseased trees is equally important for the environment. Our professional tree arborists are experts at removing trees safely. It is recommended to avoid cutting trees on your own and always hire an expert tree company for this job.
',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}