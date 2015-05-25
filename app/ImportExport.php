<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class ImportExport extends Model {
    protected $table = 'import_export';
    public $timestamp = true;
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
