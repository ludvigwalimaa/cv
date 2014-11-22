<?php

class Education extends Eloquent{

		protected $table = "education";
		protected $fillable = array('start', 'finish', 'title', 'location', 'text', 'hidden');

}