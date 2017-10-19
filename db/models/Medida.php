<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
 
class Medida extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_medidas';
	protected $primaryKey = 'id';
    //Ejemplo de definir campos


}