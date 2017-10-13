<?php 
namespace Models;
use Models\Jefe;
use \Illuminate\Database\Eloquent\Model;
 
class Familia extends Model {
	public $timestamps = false;
    protected $table = 'registro_estudio_paso_carga_familiar';
	protected $primaryKey = 'id';
    //Ejemplo de definir campos

	public function jefe()
	{
	    return $this->belongsTo(Jefe::class, 'cod_cabeza_familia', 'cedula');
	}

    public function municipio()
    {
    	return $this->hasOne(Municipio::class,'id_municipio','cod_municipio');
    }

    public function parroquia()
    {
    	return $this->hasOne(Parroquia::class,'id_parrouia','cod_parroquia');
    }

    public function certificacion()
    {
    	return $this->hasOne(Poblacion::class,'cedula','cedula');
    }

    public function bodega_datos()
    {
        return $this->hasOne(Bodega::class,'id','bodega');
    }
}
