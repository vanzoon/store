<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
  ];

  public const IS_ADMIN = 1;
  public const IS_MODERATOR = 2;
  public const IS_REGULAR_USER = 3;
  public const IS_PLEBS = 4;

  public function users()
  {
    return $this->belongsToMany(User::class, 'role_user');
  }

  public function permission()
  {
    return $this->belongsToMany(Permission::class, 'role_permission');
  }
}
