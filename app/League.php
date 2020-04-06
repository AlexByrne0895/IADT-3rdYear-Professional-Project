<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
  public function teams()
  {
      return $this->HasMany('App\Team');

}

    public function matches()
    {
      return $this->HasMany('App\Match');

    }
}
