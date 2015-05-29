<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberList extends Model {
        protected  $table = 'member_list';
        public $timestamp = true;
        protected $fillable = array('*');
	//

    public function Country()
    {
        return $this->belongsTo('App\Country','country_id','id');
    }

}
