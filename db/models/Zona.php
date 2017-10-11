<?php 
namespace Models;
use Models\Bodega;
use Models\Integrantes;
use Models\Sector;
use \Illuminate\Database\Eloquent\Model;
 
class ClapZona extends Model {
	public $timestamps = false;
    protected $table = 'clap_zona';
	protected $primaryKey = 'id';
    protected $fillable = ['sector_id','nombre_clap','subsector','comunidad','cod_clap','cod_bodega','cod_cadip','consolidado','eliminar'];
    //Ejemplo de definir campos

	public function sector()
	{
		return $this->belongsTo(Sector::class, 'sector_id', 'id');
	}

	public function integrantes_clap()
	{
	    return $this->hasMany(Integrantes::class, 'zona_id', 'id');
	}

	public function bodega()
	{
		return $this->hasOne(Bodega::class, 'id','cod_bodega');
	}

	public function sector_clap()
	{
		return $this->hasOne(Sector::class, 'id','sector_id');
	}
}

