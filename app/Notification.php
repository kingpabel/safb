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
}
