<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
  public function project()
  {
    return $this->belongsTo('App\Project');
  }
}
