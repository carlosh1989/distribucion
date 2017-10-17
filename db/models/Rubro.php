<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
use Models\Categoria;
 
class Rubro extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_rubros';
	protected $primaryKey = 'id';
    //Ejemplo de definir campos

	public function categoria()
	{
	    return $this->belongsTo(Categoria::class, 'distribucion_categoria_id', 'id');
	}
}
