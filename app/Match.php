<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function home_team()
    {
        return $this->belongsTo('App\Team', 'home_team_id');
    }
    public function away_team()
    {
        return $this->belongsTo('App\Team', 'away_team_id');
    }
}
