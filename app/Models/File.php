<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    public function contacts()
    {
      return $this->hasMany(Contact::class);
    }
}