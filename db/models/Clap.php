<?php 
namespace Models;
use Models\Bodega;
use Models\Comunidad;
use Models\Integrante;
use Models\Municipio;
use Models\Parroquia;
use Models\Sector;
use Models\Subsector;
use \Illuminate\Database\Eloquent\Model;
 
class Clap extends Model {
	public $timestamps = false;
    protected $table = 'tabla_clap';
	protected $primaryKey = 'id_clap';
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

    public function bodega()
    {
        return $this->hasOne(Bodega::class,'id','id_bodega');
    }

    public function integrantes()
    {
    	return $this->hasMany(Integrante::class,'id_clap','id_clap');
    }
}
