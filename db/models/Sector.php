<?php 
namespace Models;
use Models\ClapZona;
use Models\Municipio;
use Models\Parroquia;
use \Illuminate\Database\Eloquent\Model;
 
class Sector extends Model {
	public $timestamps = false;
    protected $table = 'tabla_sector';
	protected $primaryKey = 'id_sector';
    //Ejemplo de definir campos


}