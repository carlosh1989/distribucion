<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
 
class Rubro extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_rubros';
	protected $primaryKey = 'id';
    //Ejemplo de definir campos
}
