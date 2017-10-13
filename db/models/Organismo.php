<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
 
class Organismo extends Model {
	public $timestamps = false;
    protected $table = 'tabla_consulta_organos';
	protected $primaryKey = 'id';

}
