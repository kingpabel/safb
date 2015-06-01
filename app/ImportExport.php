<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class ImportExport extends Model {
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'import_export';
    public $timestamp = true;
    protected $fillable = array('*');
	//

    public function newQuery()
    {   if(Auth::user()->user_level > 1)
        {
            $query = parent::newQuery();
            $query->where('created_by', '=', Auth::user()->id);
            return $query;
        }

    }

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

    public function Country()
    {
        return $this->belongsTo('App\Country','country_id','id');
    }

    public function Location()
    {
        return $this->belongsTo('App\Location','location_id','id');
    }

    public function Unit()
    {
        return $this->belongsTo('App\Unit','unit_id','id');
    }
}
