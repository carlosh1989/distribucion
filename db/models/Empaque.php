<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
 
class Empaque extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_empaques';
	protected $primaryKey = 'id';
    //Ejemplo de definir campos


}