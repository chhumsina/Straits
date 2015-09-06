<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class Article extends Eloquent {
	// This is trait for using entrust
	use HasRole;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tbl_articles';
	protected $fillable = ['id','title','image','description','type','status','created_at','updated_at'];

    public function getDates()
    {
        return array();
    }

}