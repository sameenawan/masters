<?php

class Course extends Eloquent {
	public function author(){
		return $this->belongsToMany('User');
		}

}
