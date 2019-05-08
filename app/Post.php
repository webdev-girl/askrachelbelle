<?php

namespace App\Models;
namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
class Post extends Model
{
    // protected $fillable = ['user_id', 'post'];
    // protected $appends = ['createdDate'];


    public function comment(){
        return $this->hasMany('App\Comment');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getCreatedDateAttribute() {
        return $this->created_at->diffForHumans();
           }
    }
