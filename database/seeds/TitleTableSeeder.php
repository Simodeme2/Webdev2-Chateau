<?php

use Illuminate\Database\Seeder;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'name' => 'mr',
			    'created_at' => date('Y-m-d H:i:s')
		    ],
		    [
			    'name' => 'mw',
			    'created_at' => date('Y-m-d H:i:s')
		    ],
		    [
			    'name' => 'juf',
			    'created_at' => date('Y-m-d H:i:s')
		    ],
		    [
			    'name' => 'dr',
			    'created_at' => date('Y-m-d H:i:s')
		    ]
	    ];

        \App\Models\Title::insert($data);
    }
}
