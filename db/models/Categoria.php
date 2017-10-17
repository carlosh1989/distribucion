<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
 
class Categoria extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_categorias';
	protected $primaryKey = 'id';

}