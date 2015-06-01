<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberList extends Model {
    use SoftDeletes;

    protected $dates = ['deleted_at'];
        protected  $table = 'member_list';
        public $timestamp = true;
        protected $fillable = array('*');
	//

    public function Country()
    {
        return $this->belongsTo('App\Country','country_id','id');
    }

}
