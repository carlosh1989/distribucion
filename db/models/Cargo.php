<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
 
class Cargo extends Model {
	public $timestamps = false;
    protected $table = 'tabla_clap_cargos';
	protected $primaryKey = 'id_cargo';

}
