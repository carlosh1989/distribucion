<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
 
class Origen extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_origen';
	protected $primaryKey = 'id';

}
