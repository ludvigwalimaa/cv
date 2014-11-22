<?php

class Employment extends Eloquent{

		protected $table = "employers";
		protected $fillable = array('start', 'finish', 'title', 'location', 'text', 'hidden');

}