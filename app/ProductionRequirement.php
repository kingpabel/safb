<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class ProductionRequirement extends Model {
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected  $table = 'production_requirement';
    public  $timestamp = true;
    protected $fillable = array('*');

    /**
     *
     */

    public function newQuery()
    {
        $query = parent::newQuery();
        if(Auth::user()->user_level > 1)
        {
            $query->where('created_by', '=', Auth::user()->id);
            return $query;
        }
        return $query;
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function DataType()
    {
        return $this->belongsTo('App\DataType','data_type_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Food()
    {
        return $this->belongsTo('App\Food','food_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Location()
    {
        return $this->belongsTo('App\Location','location_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Unit()
    {
        return $this->belongsTo('App\Unit','unit_id','id');
    }
}
