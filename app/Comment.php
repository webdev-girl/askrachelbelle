<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Comment extends Model{

     public function post(){
        return $this->belongsTo('App\Post');
    }

    public function user()
  {
      return $this->belongsTo(User::class);
  }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      // 'post_id',
      // 'posted_at'
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        // 'posted_at'
    ];

}
