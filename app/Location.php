<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {
    protected  $table = 'location';
    public  $timestamp = true;
    protected $fillable = array('*');

	//

}
