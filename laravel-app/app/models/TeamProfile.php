<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class TeamProfile extends Eloquent {
	// This is trait for using entrust
	use HasRole;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tbl_team';
	protected $fillable = ['id','name','photo','tel','email','status','position','description','created_at','updated_at'];

    public function getDates()
    {
        return array();
    }

}