<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    public function contacts()
    {
      return $this->hasMany(Contact::class);
    }

    public function upload($request)
    {
    	$imageName = time().'.'.$request->curriculum->getClientOriginalExtension();
        $request->curriculum->move(public_path('/uploads'), $imageName);
        return $imageName;
    }
}