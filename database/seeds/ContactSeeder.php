<?php

use Illuminate\Database\Seeder;


use App\ContactsModel;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaults = [
            [
                'name' => 'marjo',
                'phone' => '73264734',
                'mobile' => '2735327'
            ],
            [
                'name' => 'Jusel',
                'phone' => '73264734',
                'mobile' => '2735327'
            ],
            [
                'name' => 'Roman',
                'phone' => '73264734',
                'mobile' => '2735327'
            ],
            [
                'name' => 'Tansan',
                'phone' => '73264734',
                'mobile' => '2735327'
            ],
            [
                'name' => 'Dungol',
                'phone' => '73264734',
                'mobile' => '2735327'
            ]
        ];

        foreach($defaults as $row){
            ContactsModel::create( $row );
        }
    }
}
