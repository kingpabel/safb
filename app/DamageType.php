<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DamageType extends Model {
    protected  $table = 'damage_type';
    public  $timestamp = true;
    protected $fillable = array('*');

	//

}
