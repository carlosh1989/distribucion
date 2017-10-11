<?php 
namespace Models;
use Models\Cargo;
use Models\Integrantes;
use Models\Sector;
use \Illuminate\Database\Eloquent\Model;
 
class ClpResponsable extends Model {
	public $timestamps = false;
    protected $table = 'tabla_clp_integrantes';
	protected $primaryKey = 'id_integrantes';
    //Ejemplo de definir campos

	public function sector()
	{
		return $this->belongsTo(Sector::class, 'sector_id', 'id');
	}

    public function intmunicipio()
    {
    	return $this->hasOne(Municipio::class,'id_municipio','municipio_int');
    }

    public function intparroquia()
    {
    	return $this->hasOne(Parroquia::class,'id_parrouia','parroquia_int');
    }

    public function cargo()
    {
    	return $this->hasOne(Cargo::class,'id_cargo','id_cargo');
    }
   
}
