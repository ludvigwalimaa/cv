<?php

class Commitment extends Eloquent{

		protected $table = "commitments";
		protected $fillable = array('start', 'finish', 'title', 'location', 'text', 'hidden');

}