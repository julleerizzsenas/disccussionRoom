<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarded = [];

	public $timestamps = true;

	public function posts()
	{
		return $this->belongsTo(Post::class, 'post_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');

	}

	public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
