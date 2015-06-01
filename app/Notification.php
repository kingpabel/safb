<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Notification extends Model {
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'notification';
    public  $timestamp = true;
    protected $fillable = array('*');
	//

}
