<?php

use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\File;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_item = ['path' => 'pdf/GabriellaVidal_currículo.pdf', 'filename' => 'GabriellaVidal_currículo.pdf'];
        $contact_item = [
        	'name' => 'Gabriella Vidal',
			'phone' => '(84) 98801-0667',
			'email' => 'gabriellavidal2013@gmail.com',
			'linkedin' => 'https://www.linkedin.com/in/gabriella-vidal-5a1400114/',
			'github' => 'https://github.com/GabriellaVidal',
			'level_english' => 'Intermidiário',
			'salary' => '2.500,00',
			'motivation' => null
        ];

        for ($i=0; $i < 10; $i++) { 
        	$contact = new Contact($contact_item);
        	$file = new File($file_item);
        	$file->save();
        	$contact->file()->associate($file);
        	$contact->save();

        }
    }
}
