<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
use Models\Combo;
 
class Item extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_items';
	protected $primaryKey = 'id';
    //Ejemplo de definir campos

	public function combo()
	{
		return $this->belongsTo(Combo::class, 'combo_id', 'id');
	}
}
