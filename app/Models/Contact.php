<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable = [
	    'name',
	    'phone',
	    'email',
	    'motivation',
	    'linkedin',
	    'github',
	    'level_english',
	    'salary'
	];
	
    public function file()
    {
      return $this->belongsTo(File::class);
    }

    public function setItem($contact, $request)
    {
    	$contact['name'] = $request->name;
    	$contact['phone'] = $request->phone;
    	$contact['email'] = $request->email;
    	$contact['motivation'] = $request->motivation;
    	$contact['linkedin'] = $request->linkedin;
    	$contact['github'] = $request->github;
    	$contact['level_english'] = $request->level_english;
    	$contact['salary'] = $request->salary;

    	return $contact;
    }

}