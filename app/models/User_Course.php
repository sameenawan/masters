<?php

class User_Course extends Eloquent {
	public function author(){
		return $this->belongsToMany('User');
		}

	public function User(){
		return $this->belongsToMany('Author');
		}

}
