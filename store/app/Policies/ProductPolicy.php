<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
  use HandlesAuthorization;

  /**
   * Create a new policy instance.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }

  public function create(User $user)
  {
    return array_diff(
      $user->roles->pluck('role_id')->toArray(),
      [Role::IS_ADMIN, Role::IS_MODERATOR]
    );
  }

  public function update(User $user)
  {
    return array_diff(
      $user->roles->pluck('role_id')->toArray(),
      [Role::IS_ADMIN, Role::IS_MODERATOR]
    );
  }

  public function delete(User $user)
  {
    return array_diff(
      $user->roles->pluck('role_id')->toArray(),
      [Role::IS_ADMIN]
    );
  }
}
