<?php 
namespace Models;
use Models\ClapZona;
use Models\Municipio;
use Models\Parroquia;
use \Illuminate\Database\Eloquent\Model;
 
class Subsector extends Model {
	public $timestamps = false;
    protected $table = 'tabla_subsector';
	protected $primaryKey = 'id_subsector';
    //Ejemplo de definir campos


}
