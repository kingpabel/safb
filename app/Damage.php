<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Damage extends Model {

    protected $table = 'damage';
    public  $timestamp = true;
    protected $fillable = array('*');
	//

    public static function boot()
    {
        parent::boot();

        static::creating(function($post)
        {
            $post->created_by = Auth::user()->id;
            $post->updated_by = Auth::user()->id;
        });

        static::updating(function($post)
        {
            $post->updated_by = Auth::user()->id;
        });
    }/* END Boot */

    public function Food()
    {
        return $this->belongsTo('App\Food','food_id','id');
    }

    public function Location()
    {
        return $this->belongsTo('App\Location','location_id','id');
    }

    public function DamageType()
    {
        return $this->belongsTo('App\DamageType','damage_type_id','id');
    }

    public function DamageLevel()
    {
        return $this->belongsTo('App\DamageLevel','damage_level_id','id');
    }

}
