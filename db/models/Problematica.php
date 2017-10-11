<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
 
class Problematica extends Model {
	public $timestamps = false;
    protected $table = 'tabla_consulta_problematicas';
	protected $primaryKey = 'id';
}
