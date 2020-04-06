<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  public function league()
  {
    return $this->belongsTo('App\League');
  }

  public function homeMatches()
  {
    return $this->hasMany('App\Match', 'home_team_id');
  }

  public function awayMatches()
  {
    return $this->hasMany('App\Match', 'away_team_id');
  }

  public function matches()
  {
    return $this->homeMatches->merge($this->awayMatches);
  }

  public function manager()
  {
    return $this->belongsTo('App\Manager');
  }


  public function players()
  {
    return $this->hasMany('App\Player');
  }
}
