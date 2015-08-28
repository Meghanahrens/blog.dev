<?php

class Post extends BaseModel
{
	protected $table = 'posts';
	protected $fillable = ['title', 'body'];
	public static $rules = array('title' => 'required|max:255', 'body' => 'required|max:4000');

	
	public function user()
	{
		return $this->belongsTo('User');
	}

}
