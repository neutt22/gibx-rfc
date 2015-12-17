<?php

class Cars extends Eloquent{

	protected $table = 'cars';

	public function insurers(){
		return $this->hasMany('Insurers');
	}

}