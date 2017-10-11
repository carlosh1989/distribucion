<?php 
namespace Models;
use Models\Bodega;
use Models\Familia;
use Models\Municipio;
use Models\Parroquia;
use \Illuminate\Database\Eloquent\Model;
 
class Jefe extends Model {
	public $timestamps = false;
    protected $table = 'registro_estudio_datos_del_encuestado';
	protected $primaryKey = 'id';
    protected $fillable = ['certificacion_solo'];
    //Ejemplo de definir campos

	public function familia()
	{
	    return $this->hasMany(Familia::class, 'cod_cabeza_familia', 'cedula');
	}

	public function bodeguera()
	{
		return $this->belongsTo(Bodega::class, 'bodega', 'id');
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
