<?php 
namespace Models;
use Models\Bodega;
use Models\Familia;
use Models\Jefe;
use \Illuminate\Database\Eloquent\Model;
 
class Poblacion extends Model {
	public $timestamps = false;
    protected $table = 'tabla_poblacion';
	protected $primaryKey = 'id';
    //Ejemplo de definir campos

	public function jefe()
	{
	    return $this->hasOne(Jefe::class, 'cedula', 'cedula');
	}

	public function familia()
	{
	    return $this->hasMany(Familia::class, 'cod_cabeza_familia', 'cedula');
	}

	public function bodeguera()
	{
		return $this->belongsTo(Bodega::class, 'bodega', 'id');
	}
}
