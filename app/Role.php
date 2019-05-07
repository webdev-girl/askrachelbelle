<?php

namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
namespace App\Models;

class Role extends Model
{

    const ROLE_ADMIN = 'admin';
    const ROLE_EDITOR = 'editor';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
