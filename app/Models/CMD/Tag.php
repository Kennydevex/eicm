<?php

namespace EICM\Models\CMD;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{



  public function articles()
  {
      return $this->belongsToMany('Article');
  }
}
