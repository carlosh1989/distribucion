<?php 
namespace Models;
use Models\Problematica;
use \Illuminate\Database\Eloquent\Model;
 
class Consulta extends Model {
	public $timestamps = false;
    protected $table = 'tabla_consulta';
	protected $primaryKey = 'id';

    public function problematica()
    {
    	return $this->hasOne(Problematica::class,'id','id_problematica');
    }
}