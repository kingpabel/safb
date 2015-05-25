<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {
    protected  $table = 'country';
    public $timestamp = true;
    protected  $fillable = array('*');

	//

}
