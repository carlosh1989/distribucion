<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
use Models\Item; 

class Combo extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_combos';
	protected $primaryKey = 'id';

    public function items()
    {
    	return $this->hasMany(Item::class,'combo_id','id');
    }
}