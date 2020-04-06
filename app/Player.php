<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  /**
 * The roles that belong to the user.
 */
 // public function roles()
 // {
 //    return $this->belongsToMany('App\Role');
 //  }
 //
 //
 //  public function hasRole($role)
 //  {
 //    return $this->roles()->where('name', $role)->first() != null;
 //  }

  public function user()
  {
      return $this->belongsTo('App\User');
  }

  public function team()
  {
    return $this->belongsTo('App\Team');
  }
}
