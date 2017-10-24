<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
use Models\Coste;
use Models\Rubro;
use Models\Origen;
 
class Producto extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_productos';
	protected $primaryKey = 'id';

	public function coste()
	{
		return $this->belongsTo(Coste::class, 'coste_id', 'id');
	}

	public function rubro()
	{
		return $this->belongsTo(Rubro::class, 'rubro_id', 'id');
	}

	public function origen()
	{
		return $this->belongsTo(Origen::class, 'origen_id', 'id');
	}
}