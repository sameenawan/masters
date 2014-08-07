<?php

	class User extends Eloquent {
		public function course(){
		return $this->belongsToMany('Course');
		}
	}
