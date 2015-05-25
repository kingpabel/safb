<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportExport extends Model {
    protected $table = 'import_export';
    public $timestamp = true;
    protected $fillable = array('*');
	//

}
