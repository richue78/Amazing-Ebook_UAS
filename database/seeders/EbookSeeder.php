<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ebooks = [
            [
                'id' => '1',
                'title' => 'BakaToTest to Shokanju ni',
                'author' => 'Kenji Inoue',
                'description'=> 'he protagonist is a guy who is among the stupidest of the stupidest in the school. In this school, your grades can be over the score of 100. 
                If you leave an examination partway, you get a score of zero. A bright and cute girl, Himeji Mizuki, had a high fever during the examination. Despite her potential to be the second-highest scorer in her year, she obtained a zero for having left due to her illness and is thus allocated to the worst class, Class F.
                Grades mean almost everything. Class A, taught by a smart-looking teacher, uses a plasma TV the size of an entire wall as their blackboard, personal laptops, personal air conditioners, refrigerators, adjustable seats, and all kinds of different appliances. 
                Within the refrigerator are all kinds of drinks and snacks. Their ceiling is made of glass, and the walls allow them to hang up high-class drawings and plants.
                As for Class F, the worst class... they have Japanese desks and seat paddings. Their blackboard is filthy and even lacks chalk! When someone complains that the leggings of his desk is broken,',
            ],
            [
                'id' => '2',
                'title' => '86:EightySix',
                'author' => 'Asato Asato',
                'description'=> 'The Republic of San Magnolia has been at war with the Empire of Giad for nine years. 
                Though it initially suffered devastating losses to the Empires autonomous mechanized Legions, The Republic has since developed its own autonomous units, called Juggernauts, which are directed remotely by a Handler. 
                While on the surface the public believes the war is being fought between machines, in reality, the Juggernauts are being piloted by humans, all of whom are 86—the designation given to the Colorata minority of San Magnolia. 
                The 86 originally had equal rights, but were persecuted and scapegoated by the dominant Alba race and the Alba-supremacist Republic government to the point where Colorata were both officially designated and popularly considered subhuman. 
                The 86 were not permitted to have personal names and were immured in internment camps in the 86th Districttheir namesakeall the while being forced to fight in the Republics war with the Empire to receive better treatment.',
            ],
            [
                'id' => '3',
                'title' => 'Mahouka kouko no rotosei',
                'author' => 'Sato Tsutomu',
                'description'=> 'In a world where hunters, humans who possess magical abilities, must battle deadly monsters to protect the human race from certain annihilation, a notoriously weak hunter named Sung Jinwoo finds himself in a seemingly endless struggle for survival. One day, after narrowly surviving an overwhelmingly powerful double dungeon that nearly wipes out his entire party, a mysterious program called the System chooses him as its sole player and in turn, gives him the extremely rare ability to level up in strength, possibly beyond any known limits. Follow Jinwoos journey as he fights against all kinds of enemies, both man and monster, to discover the secrets of the dungeons and the true source of his powers. ',
            ],
        ];

        DB::table('ebooks')->insert($ebooks);
    }
}
