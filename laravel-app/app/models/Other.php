<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class Other extends Eloquent {
	// This is trait for using entrust
	use HasRole;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tbl_other';
	protected $fillable = ['id','image','welcome','updated_at','crated_at'];
}