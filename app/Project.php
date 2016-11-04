<?php

namespace App;

use App\Part;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  public function parts()
  {
    return $this->hasMany('App\Part');
  }
}
