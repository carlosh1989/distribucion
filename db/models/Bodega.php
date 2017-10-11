<?php 
namespace Models;
use Models\Comunidad;
use Models\Municipio;
use Models\Parroquia;
use Models\Sector;
use Models\Subsector;
use \Illuminate\Database\Eloquent\Model;
 
class Bodega extends Model {
	public $timestamps = false;
    protected $table = 'registro_bodegas_patria';
	protected $primaryKey = 'id';
    //Ejemplo de definir campos

    public function municipio()
    {
    	return $this->hasOne(Municipio::class,'id_municipio','cod_municipio');
    }

    public function parroquia()
    {
    	return $this->hasOne(Parroquia::class,'id_parrouia','cod_parroquia');
    }

    public function sector()
    {
        return $this->hasOne(Sector::class,'id_sector','id_sector');
    }

    public function subsector()
    {
        return $this->hasOne(Subsector::class,'id_subsector','id_subsector');
    }

    public function comunidad()
    {
        return $this->hasOne(Comunidad::class,'id_comunidad','id_comunidad');
    }
}


