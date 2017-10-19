<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
use Models\Rubro;

class Presentacion extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_presentaciones';
	protected $primaryKey = 'id';

	public function rubro()
	{
		return $this->belongsTo(Rubro::class, 'rubro_id', 'id');
	}

}
